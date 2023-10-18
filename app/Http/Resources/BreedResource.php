<?php

namespace App\Http\Resources;

use App\Http\Resources\SpecieResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BreedResource extends JsonResource
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
            'breed' => $this->breed,
            'description' => $this->description,
            
            'specie_id' => $this->specie_id,

            'specie' => new SpecieResource($this->whenLoaded('specie')),
       
        ];
    }
}
