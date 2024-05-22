<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicationResource extends JsonResource
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
            'description' => $this->description,
            'dosage' => $this->dosage,
            'unit' => $this->unit,
            'am' => $this->am,
            'pm' => $this->pm,
            'med_id' => $this->med_id,

            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,
            'services_availed_id' => $this->services_availed_id,

            'medicine' => new MedicineResource($this->whenLoaded('medicine')),
            'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),

        ];
    }
}
