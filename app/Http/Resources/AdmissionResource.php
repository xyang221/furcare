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

            'pet_id' => $this->pet_id,
            'treatment_id' => $this->treatment_id,
            'services_availed_id' => $this->services_availed_id,

            'pet' => new PetResource($this->whenLoaded('pet')),
            'treatment' => new TreatmentResource($this->whenLoaded('treatment')),
            // 'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),

        ];
    }
}
