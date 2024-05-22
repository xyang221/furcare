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

    protected $fillable = ['date', 'description', 'dosage','unit', 'treatment_id',  'med_id','services_availed_id','am', 'pm'];

    protected $dates = ['deleted_at'];

    protected $with = ['treatment','medicine','servicesavailed'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id', 'id');
    }

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'med_id', 'id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id', 'id');
    }

}
