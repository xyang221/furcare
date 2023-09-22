<?php

namespace App\Models;

use App\Models\Address;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;

    protected $table = 'petowners';

    protected $fillable = ['firstname', 'lastname', 'contact_num','user_id','address_id'];

    protected $with = ['user', 'address'];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
