<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Http\Requests\ClassRoomRequest;

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

    public function create(ClassRoomRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        // Luu du lieu vao bang classes
        // CACH 1
        // Khoi tao doi tuong moi
            // $classRoom = new ClassRoom();
        // gan gia tri vao cho cac thuoc tinh
            // $classRoom->name = $data['name'];
            // $classRoom->teacher_name = $data['teacher_name'];
            // $classRoom->major = $data['major'];
            // $classRoom->max_student = $data['max_student'];
        // Luu
            // $classRoom->save();
        // Sau khi luu se tra ve danh sach

        // CACH 2
            // ClassRoom::create($data);

        // CACH 3
        $multiData = [
            $data,
            $data,
            $data,
        ];
        ClassRoom::insert($multiData);

        return view('admin.class', ['classes' => ClassRoom::all()]);
        // return $this->index();
    }

    public function editForm(ClassRoom $class) {
        // Dat ten tham so trung tham so o Route, kem theo kieu ClassRoom
        // Tra ve luoon ClassRoom co id ma khong can thuc hien find()
        // $classRoom = ClassRoom::find($id);
        // dd($class);
        return view('admin.add_class', ['class' => $class]);
    }

    public function update(ClassRoomRequest $request) {
        // 1. Lay ra du lieu can update
        $data = $request->except('_token', 'id');
        // 2. Tim ra classRoom co id truyen vao
        $classRoom = ClassRoom::find($request->id);
        // $classRoom = ClassRoom::where('id', '=' ,$request->id)->first();
        // 3. Update bang phuong thuc update
        $classRoom->update($data);
        // 4. Tra ve danh sach
        return $this->index();
    }
}
