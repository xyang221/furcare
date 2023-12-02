<?php

namespace App\Models;

use App\Models\Diagnosis;
use App\Models\Pet;
use App\Models\ServicesAvailed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestResult extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'test_results';

    protected $fillable = ['attachment','description','pet_id', 'services_availed_id'];

    protected $dates = ['deleted_at'];
    
    protected $with = ['pet','servicesavailed'];

    // public function diagnosis()
    // {
    //     return $this->belongsTo(Diagnosis::class, 'diagnosis_id','id');
    // }
    
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id','id');
    }


}
