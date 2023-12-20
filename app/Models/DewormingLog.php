<?php

namespace App\Models;

use App\Models\Pet;
use App\Models\ServicesAvailed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DewormingLog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'deworming_logs';

    protected $fillable = ['date', 'weight', 'description', 'return', 'pet_id', 'vet_id', 'services_availed_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet', 'servicesavailed', 'vet'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }
    public function vet()
    {
        return $this->belongsTo(Doctor::class, 'vet_id', 'id');
    }

    public function servicesavailed()
    {
        return $this->belongsTo(ServicesAvailed::class, 'services_availed_id', 'id');
    }
}
