<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SurgeryResource extends JsonResource
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
            'procedure' => $this->procedure,
            'chart_num' => $this->chart_num,

            'pet_id' => $this->pet_id,
            'services_availed_id' => $this->services_availed_id,

            'pet' => new PetResource($this->whenLoaded('pet')),
            'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),

        ];
    }
}
