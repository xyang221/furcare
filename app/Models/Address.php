<?php

namespace App\Models;

use App\Models\Zipcode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = ['zipcode_id','barangay'];


    protected $with = ['zipcode'];

    public function zipcode()
    {
        return $this->belongsTo(Zipcode::class, 'zipcode_id','id');
    }

    public function petowner()
    {
        return $this->hasMany(PetOwner::class);
    }

   

    
}
