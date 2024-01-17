<?php

namespace App\Models;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = ['service', 'cat_id'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'cat_id','id');
    }
}
