<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\Auth;

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

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admins.getLogin');
    }

    public function getLogin()
    {
        // 1. Check dang nhap truoc
        if (Auth::check()) {
            return redirect()->route('classes.list');
        }
        // Neu chua dang nhap thi moi tra ve view login

        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        // 0. Kiem tra da login chua, neu true la da login
        if (Auth::check()) {
            return redirect()->route('classes.list');
        }

        // Neu chua login thi chay xuong duoi
        $this->validate($request, [
            'email' => 'required|email|exists:admins|min:6',
            'password' => 'required|min:6|max:32'
            ]);
        // 1. Check validate va lay ra du lieu gom email va password
        $data = $request->only(['email', 'password']);
        // 2. Kiem tra dang nhap theo email va password vua nhan
        $checkLogin = Auth::attempt($data);

        // 3. Kiem tra neu tra ve true la dang nhap thanh cong
        if ($checkLogin) {
            return redirect()->route('classes.list');
        } else {
            return redirect()->route('admins.getLogin');
        }
    }

    public function getRegister()
    {
        if (Auth::check()) {
            return redirect()->route('classes.list');
        }

        return view('admin.register');
    }
}
