<?php

namespace App\Http\Resources;

use App\Http\Resources\AddressResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\PetResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetOwnerResource extends JsonResource
{
    public static $wrap = false;

    /**
     * Transform the resource into an array.
     *@param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'contact_num' => $this->contact_num,
            'zone' => $this->zone,
            'barangay' => $this->barangay,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,

            'zipcode_id' => $this->zipcode_id,
            'user_id' => $this->user_id,

            'zipcode' => new ZipcodeResource($this->whenLoaded('zipcode')),
            'user' => new UserResource($this->whenLoaded('user')),

        ];
    }
}
