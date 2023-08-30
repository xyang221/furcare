<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['zipcode_id','address_id','street'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function zipcode()
    {
        return $this->belongsTo(Zipcode::class);
    }

}
