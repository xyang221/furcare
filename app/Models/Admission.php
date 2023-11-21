<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'admission';

    protected $fillable = ['date_admission', 'date_released', 'treatment_cost', 'pet_id', 'treatment_id'];

    protected $dates = ['deleted_at'];

    // protected $with = ['pet'];

    // public function pet()
    // {
    //     return $this->belongsTo(Pet::class, 'pet_id','id');
    // }
}
