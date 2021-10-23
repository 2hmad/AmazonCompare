<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminDashboard extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->exists('admin-email')) {
            $data = DB::table('admins')->where('email', '=', Session::get('admin-email'))->first();
            return view('admin/dashboard', compact('data'));
        }
        return redirect("admin/login")->with('error', 'عذراً قم بتسجيل الدخول اولاً');
    }
    public function users() {
        $data = DB::table('admins')->where('email', '=', Session::get('admin-email'))->first();
        $users = DB::table('users')->get();
        return view("admin/users", compact('users', 'data'));
    }
}
