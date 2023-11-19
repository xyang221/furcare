<?php

namespace App\Models;

use App\Models\Treatment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'medicines';

    protected $fillable = ['name', 'price'];
    
    protected $dates = ['deleted_at'];


    // protected $with = ['treatment'];

    public function treatment()
    {
        return $this->hasMany(Treatment::class);
    }
}
