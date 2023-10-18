<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'barangay' => $this->barangay,
            'zone' => $this->zone,
            'zipcode_id' => $this->zipcode_id,
            
            'zipcode' => new ZipcodeResource($this->whenLoaded('zipcode')),
        ];
    }
}
