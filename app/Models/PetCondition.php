<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PetCondition extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pet_condition';

    protected $fillable = ['date', 'eating','drinking', 'urinated', 'vomit', 'defecated', 'is_AM_or_PM', 'treatment_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['treatment'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id','id');
    }
}
