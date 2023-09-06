<?php

namespace App\Models;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;

    // protected $table = 'pet_owners';

    protected $fillable = ['firstname', 'lastname', 'contact_num','user_id','address_id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }


    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // protected $with = ['address'];


    

    

   
   

    
    
}
