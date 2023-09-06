<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\ClientService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'purpose', 'status','remarks', 'petowner_id', 'client_service_id'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }

    public function clientservice()
    {
        return $this->belongsTo(ClientService::class, 'client_service_id','id');
    }
}
