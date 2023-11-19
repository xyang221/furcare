<?php

namespace App\Http\Resources;

use App\Http\Resources\TreatmentResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetConditionResource extends JsonResource
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
            'eating' => $this->eating,
            'drinking' => $this->drinking,
            'urinated' => $this->urinated,
            'vomit' => $this->vomit,
            'defecated' => $this->defecated,
            'is_AM_or_PM' => $this->is_AM_or_PM,
            
            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,

            // 'treatment' => new TreatmentResource($this->whenLoaded('treatment')),
        ];
    }
}
