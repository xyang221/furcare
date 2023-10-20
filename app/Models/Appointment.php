<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';

    protected $fillable = ['date', 'purpose', 'status','remarks', 'petowner_id', 'service_id'];

    protected $with = ['petowner', 'service'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }
}
