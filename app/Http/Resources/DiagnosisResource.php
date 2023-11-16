<?php

namespace App\Http\Resources;

use App\Http\Resources\PetResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiagnosisResource extends JsonResource
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
            'id'=> $this->id,
            'date' => $this->date,
            'remarks' => $this->remarks,

            'service_id' => $this->service_id,
            'pet_id' => $this->pet_id,

            'service' => new ServiceResource($this->whenLoaded('service')),
            'pet' => new PetResource($this->whenLoaded('pet')),

        ];
    }
}
