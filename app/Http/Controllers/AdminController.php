<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ClassRoom;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::find(1);
        // Lay ra Admin kem theo ClassRoom
        $admin = $admin->load('classRoom');
        // $admin = $admin->with('classRoom')->get();

        // Lay rieng ra ClassRoom cua Admin do
        // $class = $admin->classRoom;
        // $class = $admin->classRoom()->get();
        dd($admin);

    }

    public function indexClass()
    {
        $class = ClassRoom::find(5);
        // Lay ra tat ca admins thuoc class 5
        $admins = $class->admins->toArray();

        // Lay ra class kem theo tat ca cac admins thuoc no
        $class = $class->load('admins');
        dd($admins);

    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;
        $data = $request->only('email', 'password');
        // dd(Auth::attempt($data));
        if (Auth::attempt($data)) {
            return redirect()->route('classes.list');
        } else {
            return redirect()->route('admins.login');
        }
    }

    public function logout()
    {
        Auth::logout();
    }
}
