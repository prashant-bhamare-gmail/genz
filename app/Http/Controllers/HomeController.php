<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        //
    }

    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
}
