<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect() {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook() {
        try {
            $user = Socialite::driver('facebook')->user();
//            $saveUser = DB::
        } catch (\Throwable $th) {

        }
    }
}
