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

    protected $fillable = ['date', 'description','quantity', 'dosage', 'medcat_id', 'medicine_name', 'treatment_id','services_availed_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['servicesavailed', 'category'];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'medcat_id', 'id');
    }
    // public function medicine()
    // {
    //     return $this->belongsTo(Medicine::class, 'medicine_id','id');
    // }
    
    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id','id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id','id');
    }
}
