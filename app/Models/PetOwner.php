<?php

namespace App\Models;

use App\Models\Address;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetOwner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'petowners';

    protected $fillable = ['firstname', 'lastname', 'contact_num', 'user_id', 'address_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['user', 'address'];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
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
