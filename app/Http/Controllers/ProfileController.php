<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = DB::table('users')->where('email', '=', Session::get('email'))->first();
        return view('profile', compact('profile'));
    }
}
