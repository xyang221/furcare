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
            'return' => $this->return,
            'va_againsts' => $this->va_againsts,
            
            'pet_id' => $this->pet_id,
            'vet_id' => $this->vet_id,
            'services_availed_id' => $this->services_availed_id,

            'pet' => new PetResource($this->whenLoaded('pet')),
            'vet' => new DoctorResource($this->whenLoaded('vet')),
            'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),
            'againsts' => AgainstResource::collection($this->whenLoaded('againsts')),

        ];
    }
}
