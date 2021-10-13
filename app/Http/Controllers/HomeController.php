<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $request = Http::get('https://fakestoreapi.com/products')->json();
        return view('home', compact('request'));
    }
}
