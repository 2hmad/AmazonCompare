<?php

namespace App\Http\Controllers;

use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index($id)
    {
        $request = Http::get('https://fakestoreapi.com/products/' . $id)->json();
        if (Session::has('email')) {
            $check = DB::table('favorite')->where('email', '=', Session::get('email'))->where('product_id', '=', $id)->first();
        } else {
            $check = DB::table('favorite')->where('email', '=', $_SERVER['REMOTE_ADDR'])->where('product_id', '=', $id)->first();
        }
        return view('product', compact('request', 'check'));
    }
    public function addFavorite($id, $email)
    {
        DB::insert('insert into favorite (product_id, email, date) values (?, ?, ?)', [$id, $email, date('Y-m-d')]);
        return redirect()->back();
    }
    public function deleteFavorite($id, $email)
    {
        DB::table('favorite')->where('product_id', $id)->where('email', $email)->delete();
        return redirect()->back();
    }
}
