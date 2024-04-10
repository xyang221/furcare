<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class VaccinationLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vaccination_logs';

    protected $fillable = ['date', 'weight', 'description','return', 'services_availed_id', 'pet_id','vet_id', 'va_againsts'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet','servicesavailed', 'vet'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }
    public function vet()
    {
        return $this->belongsTo(Doctor::class, 'vet_id','id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id','id');
    }

}
