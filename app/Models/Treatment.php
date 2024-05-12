<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\PetCondition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'treatment';

    protected $fillable = ['pet_id', 'admission_id', 'date', 'day', 'diagnosis', 'body_weight', 'heart_rate', 'mucous_membranes', 'pr_prealbumin', 'temperature', 'respiration_rate', 'caspillar_refill_time', 'body_condition_score', 'fluid_rate', 'comments'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet','admission'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function petcondition()
    {
        return $this->hasMany(PetCondition::class);
    }

    public function admission()
    {
        return $this->belongsTo(Admission::class,'admission_id', 'id');
    }
}
