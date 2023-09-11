<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;

    protected $table = 'species';

    protected $fillable = ['specie', 'description'];

    // protected $with = ['specie'];

    public function breed()
    {
        return $this->hasMany(Breed::class);
    }

    
}
