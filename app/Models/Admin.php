<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'university',
        'class_id',
        'is_active',
        'email',
        'password'
    ];

    public function classRoom()
    {
        return $this->belongsTo('App\Models\ClassRoom', 'class_id', 'id');
    }
}
