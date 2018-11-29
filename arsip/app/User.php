<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $fillable = [
      'fullname', 'username', 'password', 'level'
    ];

    protected $hidden = [
      'password', 'level', 'remember_token'
    ];
}
