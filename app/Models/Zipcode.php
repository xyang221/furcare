<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    protected $fillable = ['zipcode','province','city'];

    // public function addresses()
    // {
    //     return $this->belongsTo(Address::class);
    // }

    // public function staffs()
    // {
    //     return $this->hasMany(Staff::class);
    // }
}
