<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class VaccinationLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'vaccination_logs';

    protected $casts = [
        'vaccination_againsts' => 'array'
    ];

    protected $fillable = ['date', 'weight', 'description','administered','return', 'services_availed_id', 'pet_id', 'vaccination_againsts'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet','servicesavailed'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id','id');
    }

    public function againsts()
    {
        return $this->hasMany(Against::class, 'vaccination_log_id');
    }
}
