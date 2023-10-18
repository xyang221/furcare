<?php

namespace App\Models;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Staff extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'staffs';

    protected $fillable = ['firstname','lastname', 'contact_num','address_id','user_id'];

    protected $dates = ['deleted_at'];
    
    protected $with = ['user', 'address'];
    
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }


}
