<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesAvailed extends Model
{
    use HasFactory;

    protected $table = 'services_availed';

    protected $fillable = ['quantity', 'unit', 'unit_price','date_availed_for','service_id' ,'petowner_id'];

    protected $with = ['service', 'petowner'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id', 'id');
    }

    
}
