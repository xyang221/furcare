<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VaccinationLogResource extends JsonResource
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
            'date' => $this->date,
            'weight' => $this->weight,
            'description' => $this->description,
            'administered' => $this->administered,
            'status' => $this->status,
            'against_id' => $this->against_id,
            'pet_id' => $this->pet_id,

            'against' => new VaccinationAgainstResource($this->whenLoaded('against')),
            'pet' => new PetResource($this->whenLoaded('pet')),

        ];
    }
}
