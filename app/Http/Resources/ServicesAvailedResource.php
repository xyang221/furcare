<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesAvailedResource extends JsonResource
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
            'quantity' => $this->quantity,
            'unit' => $this->unit,
            'unit_price' => $this->unit_price,
            'date' => $this->date,
            'status' => $this->status,

            'service_id' => $this->service_id,
            'client_deposit_id' => $this->client_deposit_id,
            'pet_id' => $this->pet_id,

            'service' => new ServiceResource($this->whenLoaded('service')),
            'pet' => new PetResource($this->whenLoaded('pet')),
            'clientservice' => new ClientServiceResource($this->whenLoaded('clientservice')),
        ];
    }
}
