<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index($id)
    {
        $request = Http::get('https://fakestoreapi.com/products/' . $id)->json();
        return view('product', compact('request'));
    }
}
