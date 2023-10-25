<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DewormingLogResource extends JsonResource
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
            'pet_id' => $this->pet_id,

            'pet' => new PetResource($this->whenLoaded('pet')),

        ];
    }
}
