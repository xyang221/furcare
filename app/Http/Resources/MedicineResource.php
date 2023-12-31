<?php

namespace App\Http\Resources;

use App\Models\MedicineCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicineResource extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'medcat_id' => $this->medcat_id,
            'deleted_at' => $this->deleted_at,

            'category' => new MedicineCategoryResource($this->whenLoaded('category')),
        ];
    }
}
