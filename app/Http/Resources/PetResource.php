<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
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
            'birthdate' => $this->birthdate,
            'gender' => $this->gender,
            'color' => $this->color,
            'qr_code' => $this->qr_code,
            'photo' => $this->photo,

            'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
            'breed' => new BreedResource($this->whenLoaded('breed')),

        ];
    }
}