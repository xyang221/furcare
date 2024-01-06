<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentRecordResource extends JsonResource
{
    public static $wrap = false;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'ref_no' => $this->ref_no,
            'total' => $this->total,
            'amount' => $this->amount,
            'change' => $this->change,

            'client_deposit_id' => $this->client_deposit_id,
            'deleted_at' => $this->deleted_at,

            'clientdeposit' => new ClientServiceResource($this->whenLoaded('clientdeposit')),

        ];
    }
}