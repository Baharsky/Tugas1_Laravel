<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $table = 'users';
    protected $fillable = ['username', 'password', 'role'];
    protected $hidden = ['password'];
}
