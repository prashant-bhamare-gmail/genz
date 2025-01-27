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
    public function mentorspanel(){
        return view('mentors');
    }
    public function about(){
        return view('about');
    }
    public function missionvision(){
        return view('mission-vision');
    }
    public function hrterminology(){
        return view('hr-terminology');
    }
    public function hrcertification(){
        return view('hr-certification');
    }
}
