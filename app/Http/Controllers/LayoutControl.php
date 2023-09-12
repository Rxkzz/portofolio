<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutControl extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }

    public function nav(){
        return view('nav');
    }

    public function contact(){
        return view('contact');
    }

    public function project(){
        return view('project');
    }
}