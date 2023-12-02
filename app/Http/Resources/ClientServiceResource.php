<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientServiceResource extends JsonResource
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
            'deposit' => $this->deposit,
            'balance' => $this->balance,
            'status' => $this->status,
            'rendered_by' => $this->rendered_by,

            'petowner_id' => $this->petowner_id,

            'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
            
        ];
    }
}
