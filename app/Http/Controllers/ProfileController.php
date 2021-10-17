<?php

namespace App\Http\Controllers;

use App\Models\Users;
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
    public function updateInfo(Request $request) {
        $update = Users::update(
            ['name' => $request->input('name')],
            ['phone' => $request->input('phone')],
            ['country' => $request->input('country')],
            ['city' => $request->input('city')],
        );
        if($update) {
            redirect()->back();
        }
    }
}
