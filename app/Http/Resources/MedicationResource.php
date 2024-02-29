<?php

namespace App\Http\Resources;

use App\Http\Resources\MedicineResource;
use App\Models\MedicineCategory;
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
            'quantity' => $this->quantity,
            'dosage' => $this->dosage,

            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,
            'medcat_id' => $this->medcat_id,
            'medicine_name' => $this->medicine_name,
            'services_availed_id' => $this->services_availed_id,

            'category' => new MedicineCategoryResource($this->whenLoaded('category')),
            'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),

        ];
    }
}
