<?php

namespace App\Models;

use App\Models\Treatment;
use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medication extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medication';

    protected $fillable = ['date', 'description','quantity', 'dosage', 'medicine_id', 'treatment_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['medicine'];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id','id');
    }
    
    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id','id');
    }
}
