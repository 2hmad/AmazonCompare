<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminLogin extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = DB::table('admins')->where('email', '=', $request->input('email'));
        if (Auth::attempt($credentials)) {
            return redirect()->to('admin.dashboard');
        }
        return redirect("admin.login")->withSuccess('Oppes! You have entered invalid credentials');
    }
}
