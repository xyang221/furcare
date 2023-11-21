<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdmissionResource extends JsonResource
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
            'date_admission' => $this->date_admission,
            'date_released' => $this->date_released,
            'treatment_cost' => $this->treatment_cost,

            'pet_id' => $this->pet_id,
            'treatment_id' => $this->treatment_id,

            // 'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
            // 'service' => new ServiceResource($this->whenLoaded('service')),

        ];
    }
}
