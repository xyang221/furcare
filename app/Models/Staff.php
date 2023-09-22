<?php

namespace App\Models;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = ['firstname','lastname', 'contact_num','address_id','user_id'];

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
