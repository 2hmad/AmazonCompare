<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('admin.dashboard');
        }
        return redirect("admin/login")->withSuccess('Opps! You do not have access');
    }
}
