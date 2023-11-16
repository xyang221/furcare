<?php

namespace App\Models;

use App\Models\Breed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;

    protected $table = 'species';

    protected $fillable = ['specie', 'description'];

    // protected $with = ['breed'];

    public function breed()
    {
        return $this->hasMany(Breed::class);
    }

    
}
