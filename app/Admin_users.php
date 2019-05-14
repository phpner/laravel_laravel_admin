<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin_users extends Model
{
    protected $fillable = [
        'username', 'name', 'password',
    ];
    //
}
