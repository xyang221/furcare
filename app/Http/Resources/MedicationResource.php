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
            'medicine_name' => $this->medicine_name,
            'description' => $this->description,
            'dosage' => $this->dosage,
            'am' => $this->am,
            'pm' => $this->pm,

            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,
        ];
    }
}
