<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function addToCart() 
    {
        return 'work';
    }
    public function index()
    {
        return view('client.home')->withProducts(\App\item::limit(6)->get());
    }
}
