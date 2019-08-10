<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'teacher_name',
        'major',
        'max_student',
    ];

    public function admins()
    {
        return $this->hasMany('App\Models\Admin', 'class_id', 'id');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'class_id', 'id');
    }
}
