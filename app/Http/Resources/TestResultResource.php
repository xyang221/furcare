<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResultResource extends JsonResource
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
            'attachment' => $this->attachment,
            'description' => $this->description,

            'deleted_at' => $this->deleted_at,


            // 'diagnosis_id' => $this->diagnosis_id,
            'pet_id' => $this->pet_id,

            // 'diagnosis' => new DiagnosisResource($this->whenLoaded('diagnosis')),
            'pet' => new PetResource($this->whenLoaded('pet')),
       
        ];
    }
}
