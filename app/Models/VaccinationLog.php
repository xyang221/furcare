<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class VaccinationLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vaccination_logs';

    protected $fillable = ['date', 'weight', 'description','administered','status', 'services_availed_id', 'pet_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }
}
