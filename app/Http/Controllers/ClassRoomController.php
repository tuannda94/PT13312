<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();
        return view('classes', ['classes' => $classes]);
    }
}
