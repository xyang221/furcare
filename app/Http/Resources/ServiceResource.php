<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'service' => $this->service,
            'price' => $this->price,
            'status' => $this->status,
            'color' => $this->color,

            'category' => new ServiceCategoryResource($this->whenLoaded('category')),


        ];
    }
}
