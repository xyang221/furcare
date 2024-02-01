<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'staffs';

    protected $fillable = ['firstname','lastname', 'contact_num','zone', 'barangay', 'zipcode_id','user_id'];

    protected $dates = ['deleted_at'];
    
    protected $with = ['user', 'zipcode'];
    
    public function zipcode()
    {
        return $this->belongsTo(Zipcode::class, 'zipcode_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }


}
