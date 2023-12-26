<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesAvailedResource;
use App\Models\ClientService;
use App\Models\PetOwner;
use App\Models\ServicesAvailed;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $clientService = ClientService::findOrFail($id);
        $servicesAvailed = ServicesAvailed::where('client_service_id', $clientService->id)
            ->orderBy('pet_id', 'desc')->get();

        if ($servicesAvailed->isEmpty()) {
            return response()->json(['message' => 'No services availed completed of this client found at the moment.'], 404);
        }

        $html = $this->generateHTML(ServicesAvailedResource::collection($servicesAvailed), $clientService);

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        // Return the generated PDF as a response
        return response($dompdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="generated_pdf.pdf"');
    }

    private function generateHTML($servicesAvailed, $clientService)
    {
        ob_start(); // Start output buffering

?>
        <!DOCTYPE html>
        <html>

        <head>
            <title>Charge Slip</title>
            <style>
                @page {
                    margin-left: 0.25in;
                }

                .container {
                    display: flex;
                }

                table {
                    width: 50%;
                    border-collapse: collapse;
                    font-size: 12px;
                }

                th,
                td {
                    border: 1px solid black;
                    padding: 5px;
                    text-align: left;
                }

                .flexrow {
                    width: 50%;
                    padding-bottom: 10px;
                    padding-top: 10px;
                }

                span {
                    padding-top: 50px;
                }

                .total {
                    column-span: 5;
                    text-align: right;
                }

                h2 {
                    margin: 5px;
                    margin-left: 100px;
                }

                h3 {
                    margin: 5px;
                    margin-left: 130px;
                }
            </style>
        </head>

        <body class="container">
            <h2>FurCare Clinic</h2>
            <h3>Charge Slip</h3>
            <div class="flexrow">
                <strong>Client:</strong> <span><?= $clientService->petowner->firstname ?> <?= $clientService->petowner->lastname ?></span>
                <br>
                <strong>Date:</strong> <span><?= $clientService->date ?></span>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Pet</th>
                        <th>Service</th>
                        <th>Qty</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalCost = 0;
                    foreach ($servicesAvailed as $service) :
                        $subtotal = $service->quantity * $service->unit_price; // Calculate subtotal for each service
                        $totalCost += $subtotal; // Accumulate subtotal to get the total cost
                    ?>
                        <tr>
                            <td><?= $service->pet->name ?></td>
                            <td><?= $service->service->service ?></td>
                            <td><?= $service->quantity ?></td>
                            <td><?= $service->unit ?></td>
                            <td><?= number_format($service->unit_price, 2) ?></td>
                            <td><?= number_format($subtotal, 2) ?></td>
                        </tr>
                    <?php endforeach; ?>

                    <tr>
                        <td class="total" colspan="5">
                            Total:
                        </td>
                        <td><?= number_format($totalCost, 2) ?></td>
                    </tr>
                    <tr>
                        <td class="total" colspan="5">
                            Deposit:
                        </td>
                        <td><?= number_format($clientService->deposit, 2) ?></td>
                    </tr>
                    <tr>
                        <td class="total" colspan="5">
                            Balance:
                        </td>
                        <td><?= number_format($clientService->balance, 2) ?></td>
                    </tr>

                </tbody>
            </table>
            <div class="flexrow">
                <strong>Rendered by:</strong> <span><?= $clientService->rendered_by ?></span>
            </div>
        </body>

        </html>
<?php

        $html = ob_get_clean(); // Get the generated HTML and clear the output buffer

        return $html;
    }
}
