<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function check(LoginRequest $request)
    {
        if (!$request->validated()) {
            return Redirect::back()->withErrors($request->validated());
        }
        $user = Users::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('email', $user->email);
                return redirect()->to('home')->withSuccess('Logged-in');
            } else {
                return redirect('login')->with('fail-password', "password incorrect");
            }
        } else {
            return redirect('login')->with('fail-email', "email not found");
        }
    }
}
