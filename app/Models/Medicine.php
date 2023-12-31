<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medicines';

    protected $fillable = ['name', 'price', 'medcat_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'medcat_id', 'id');
    }
}
