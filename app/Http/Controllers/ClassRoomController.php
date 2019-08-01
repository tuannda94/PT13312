<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classes = ClassRoom::all();
        return view('admin.class', ['classes' => $classes]);
    }

    public function createForm()
    {
        return view('admin.add_class');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:8',
            'teacher_name' => 'required|string|min:5|max:32',
            'major' => 'required|string',
            'max_student' => 'nullable|numeric',
        ]);

        $data = $request->except('_token');
        // dd($data);
        // Luu du lieu vao bang classes
        // Khoi tao doi tuong moi
        $classRoom = new ClassRoom();
        // gan gia tri vao cho cac thuoc tinh
        $classRoom->name = $data['name'];
        $classRoom->teacher_name = $data['teacher_name'];
        $classRoom->major = $data['major'];
        $classRoom->max_student = $data['max_student'];
        // Luu
        $classRoom->save();
        // Sau khi luu se tra ve danh sach

        return view('admin.class', ['classes' => ClassRoom::all()]);
        // return $this->index();
    }
}
