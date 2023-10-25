<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationAgainst extends Model
{
    use HasFactory;

    protected $table = 'againsts';

    protected $fillable = ['acronym', 'description'];

    protected $with = ['vaccinationlogs'];

    public function vaccinationlogs()
    {
        return $this->hasMany(VaccinationLog::class);
    }
}
