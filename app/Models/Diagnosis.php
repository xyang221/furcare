<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Diagnosis extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'diagnosis';

    protected $fillable = ['date', 'remarks', 'pet_id', 'services_availed_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }

}
