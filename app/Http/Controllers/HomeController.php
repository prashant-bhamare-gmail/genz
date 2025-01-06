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
    public function leadershipteam(){
        return view('leadership-team');
    }
    public function coreteam(){
        return view('core-team');
    }
    public function advisorpanel(){
        return view('advisor-panel');
    }
    public function about(){
        return view('about');
    }
}
