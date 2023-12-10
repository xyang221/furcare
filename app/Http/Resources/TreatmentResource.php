<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreatmentResource extends JsonResource
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
            'diagnosis' => $this->diagnosis,
            'body_weight' => $this->body_weight,
            'heart_rate' => $this->heart_rate,
            'mucous_membranes' => $this->mucous_membranes,
            'pr_prealbumin' => $this->pr_prealbumin,
            'temperature' => $this->temperature,
            'respiration_rate' => $this->respiration_rate,
            'caspillar_refill_time' => $this->caspillar_refill_time,
            'body_condition_score' => $this->body_condition_score,
            'fluid_rate' => $this->fluid_rate,
            'comments' => $this->comments,

            'deleted_at' => $this->deleted_at,
            
            'pet_id' => $this->pet_id,
            'services_availed_id' => $this->services_availed_id,

            'pet' => new PetResource($this->whenLoaded('pet')),
            'serviceavailed' => new ServicesAvailedResource($this->whenLoaded('serviceavailed')),

        ];
    }
}
