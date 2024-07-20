<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surgery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'surgeries';

    protected $fillable = ['date','procedure', 'chart_num', 'pet_id', 'services_availed_id'];

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
}
