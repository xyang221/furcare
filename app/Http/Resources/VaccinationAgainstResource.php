<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VaccinationAgainstResource extends JsonResource
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
            'vaccinationlog_id' => $this->vaccinationlog_id,
            'against_id' => $this->against_id,

            'vaccinationlog' => new VaccinationLogResource($this->whenLoaded('vaccinationlog')),
            'against' => new AgainstResource($this->whenLoaded('against')),
        ];
    }
}
