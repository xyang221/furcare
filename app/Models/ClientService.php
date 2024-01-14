<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientService extends Model
{
    use HasFactory;

    protected $table = 'client_deposits';

    protected $fillable = ['date', 'deposit','balance','rendered_by', 'petowner_id', 'status'];

    protected $with = ['petowner'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }

    public function payment()
    {
        return $this->hasOne(PaymentRecord::class);
    }

}
