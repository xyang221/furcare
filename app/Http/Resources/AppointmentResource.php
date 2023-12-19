<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PetOwnerResource;
use App\Http\Resources\ServiceResource;

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

            'petowner_id' => $this->petowner_id,
            'service_id' => $this->service_id,
            'vet_id' => $this->vet_id,

            'petowner' => new PetOwnerResource($this->whenLoaded('petowner')),
            'service' => new ServiceResource($this->whenLoaded('service')),
            'doctor' => new DoctorResource($this->whenLoaded('doctor')),

        ];
    }
}
