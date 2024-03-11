<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'quantity' => $this->quantity,
            'unit' => $this->unit,

            'deleted_at' => $this->deleted_at,

            'treatment_id' => $this->treatment_id,
            'services_availed_id' => $this->services_availed_id,

            'category' => new MedicineCategoryResource($this->whenLoaded('category')),
            'servicesavailed' => new ServicesAvailedResource($this->whenLoaded('servicesavailed')),

        ];
    }
}
