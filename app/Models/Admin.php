<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'university',
        'class_id',
        'is_active',
    ];

    public function classRoom()
    {
        return $this->belongsTo('App\Models\ClassRoom', 'class_id', 'id');
    }
}
