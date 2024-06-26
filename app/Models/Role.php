<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['role', 'description'];

    protected $with = ['users'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
