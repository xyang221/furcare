<?php

namespace App\Models;

use App\Models\Breed;
use App\Models\PetOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pets';

    protected $fillable = ['name', 'birthdate', 'gender','color', 'photo', 'breed_id', 'petowner_id'];

    protected $dates = ['deleted_at'];

    protected $with = ['breed', 'petowner'];

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id','id');
    }
    
    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id', 'id');
    }






}
