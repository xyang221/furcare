<?php

namespace App\Listeners;

use App\Events\VaccinationReturn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class VaccinationListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     */
    public function handle(VaccinationReturn $event)
    {
        $vaccination = $event->vaccination;
        Log::info("Vaccination Event Handled: ". json_encode($vaccination));
    }
}
