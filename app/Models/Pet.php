<?php

namespace App\Models;

use App\Models\Breed;
use App\Models\PetOwner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = ['name', 'birthdate', 'gender','color','qr_code', 'breed_id', 'petowner_id'];

    protected $with = ['breed', 'petowner'];

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id','id');
    }

    public function petowner()
    {
        return $this->belongsTo(PetOwner::class, 'petowner_id','id');
    }
    // public function petowner()
    // {
    //     return $this->belongsTo(PetOwner::class);
    // }


}
