<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
    }
    public function about(){
        return view('about');
    }
}
