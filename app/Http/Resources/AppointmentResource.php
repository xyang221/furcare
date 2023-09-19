<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
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
            'purpose' => $this->purpose,
            'status' => $this->status,
            'remarks' => $this->remarks,

            'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
            'client_service' => new ClientServiceResource($this->whenLoaded('client_service')),

        ];
    }
}