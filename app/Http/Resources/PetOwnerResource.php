<?php

namespace App\Http\Resources;

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
            // 'address_id'=>$this->address_id,
            'address' => new AddressResource($this->whenLoaded('address')),

            

            // 'name' => $this->name,
            // 'email' => $this->email,
            // 'username' => $this->username,
            // 'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
