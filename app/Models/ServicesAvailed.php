<?php

namespace App\Models;

use App\Models\Service;
use App\Models\ClientService;
use App\Models\Diagnosis;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesAvailed extends Model
{
    use HasFactory;

    protected $table = 'services_availed';

    protected $fillable = ['status', 'quantity', 'unit', 'unit_price','date_availed_for','service_id' ,'client_service_id', 'pet_id'];

    protected $with = ['service','clientservice', 'pet'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }

    public function clientservice()
    {
        return $this->belongsTo(ClientService::class, 'client_service_id', 'id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function diagnosis()
    {
        return $this->hasMany(Diagnosis::class);
    }

    
}
