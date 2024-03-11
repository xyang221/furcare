<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['date', 'name', 'quantity', 'unit', 'treatment_id','services_availed_id'];

    protected $with = ['servicesavailed', 'category'];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'medcat_id', 'id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id','id');
    }
}
