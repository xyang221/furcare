<?php

namespace App\Models;

use App\Models\Specie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $table = 'breeds';

    protected $fillable = ['breed', 'description', 'specie_id'];

    protected $with = ['specie'];

    public function specie()
    {
        return $this->belongsTo(Specie::class, 'specie_id','id');
    }

}
