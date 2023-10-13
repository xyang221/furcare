<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    use HasFactory;

    protected $table = 'client_service';

    protected $fillable = ['date', 'deposit','balance','rendered_by', 'petowner_id', 'services_id'];

    protected $with = ['petowner','service'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id','id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
