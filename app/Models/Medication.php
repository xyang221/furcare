<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medication';

    protected $fillable = ['date', 'description', 'dosage', 'medicine_name', 'treatment_id'];

    protected $dates = ['deleted_at'];

    // protected $with = ['servicesavailed'];

    // public function category()
    // {
    //     return $this->belongsTo(MedicineCategory::class, 'medcat_id', 'id');
    // }
    // public function medicine()
    // {
    //     return $this->belongsTo(Medicine::class, 'medicine_id','id');
    // }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }

    // public function servicesavailed()
    // {
    //     return $this->belongsTo(ServicesAvailed::class, 'services_availed_id', 'id');
    // }
}
