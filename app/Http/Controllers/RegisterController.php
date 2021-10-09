<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        DB::insert('insert into users (name, email, phone, password) values (?, ?, ?, ?)', [
            $request->Input::get('name'),
            $request->Input::get('email'),
            $request->Input::get('phone'),
            Hash::make($request->Input::get('password')),
        ]);
    }
}
