<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

    protected $fillable = ['user_id', 'date', 'type', 'message', 'status'];

    // protected $dates = ['deleted_at'];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
