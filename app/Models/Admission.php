<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'admission';

    protected $fillable = ['date_admission', 'date_released', 'pet_id', 'treatment_id'];

    protected $dates = ['deleted_at'];

    // protected $with = ['pet', 'treatment', 'servicesavailed'];
    protected $with = ['pet', 'treatment'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }
    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }
    // public function servicesavailed()
    // {
    //     return $this->belongsTo(ServicesAvailed::class, 'services_availed_id', 'id');
    // }
}
