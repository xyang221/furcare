<?php

namespace App\Http\Resources;

use App\Http\Resources\MedicineResource;
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
            'id'=> $this->id,
            'date' => $this->date,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'dosage' => $this->dosage,

            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,
            'medicine_id' => $this->medicine_id,

            'medicine' => new MedicineResource($this->whenLoaded('medicine')),

        ];
    }
}
