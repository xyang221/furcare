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
            'ref_id' => $this->ref_id,
            'quantity' => $this->quantity,
            'unit' => $this->unit,
            'unit_price' => $this->unit_price,
            'date_availed_for' => $this->date_availed_for,
            'service_id' => $this->service_id,
            'petowner_id' => $this->petowner_id,
            'pet_id' => $this->pet_id,

            'service' => new ServiceResource($this->whenLoaded('service')),
            'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
        ];
    }
}
