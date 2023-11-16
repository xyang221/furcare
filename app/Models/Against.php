<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Against extends Model
{
    use HasFactory;

    protected $table = 'againsts';

    protected $fillable = ['acronym', 'description'];
}
