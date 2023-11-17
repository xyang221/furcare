<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Pet;
use App\Models\PetOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesAvailed extends Model
{
    use HasFactory;

    protected $table = 'services_availed';

    protected $fillable = ['ref_id', 'quantity', 'unit', 'unit_price','date_availed_for','service_id' ,'petowner_id', 'pet_id'];

    protected $with = ['service', 'petowner', 'pet'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id', 'id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    
}
