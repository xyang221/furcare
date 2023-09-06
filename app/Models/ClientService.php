<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'deposit','balance','rendered_by', 'petowner_id', 'services_id'];

    // protected $with = ['breed'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'services_id','id');
    }
}
