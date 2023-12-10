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

    protected $fillable = ['pet_id', 'services_availed_id', 'date', 'diagnosis', 'body_weight', 'heart_rate', 'mucous_membranes', 'pr_prealbumin', 'temperature', 'respiration_rate', 'caspillar_refill_time', 'body_condition_score', 'fluid_rate', 'comments'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet', 'serviceavailed'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function serviceavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id', 'id');
    }

    // public function petcondition()
    // {
    //     return $this->hasMany(PetCondition::class);
    // }
}
