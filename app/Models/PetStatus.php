<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PetStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pet_status';

    protected $fillable = ['date','status','pet_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['pet'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

}
