<?php

namespace App\Models;

use App\Models\Diagnosis;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $table = 'test_results';

    protected $fillable = ['attachment','description', 'diagnosis_id','pet_id'];

    // protected $dates = ['deleted_at'];
    
    protected $with = ['diagnosis', 'pet'];

    public function diagnosis()
    {
        return $this->belongsTo(Diagnosis::class, 'diagnosis_id','id');
    }
    
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id','id');
    }

}
