<?php

namespace App\Models;

use App\Models\PetOwner;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'appointment';

    protected $fillable = ['date', 'purpose', 'status', 'remarks', 'petowner_id', 'vet_id', 'services'];

    protected $with = ['petowner', 'vet'];

    protected $casts = [
        'services' => 'array'
    ];

    protected $dates = ['deleted_at'];

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id', 'id');
    }

    public function vet()
    {
        return $this->belongsTo(Doctor::class, 'vet_id', 'id');
    }
}
