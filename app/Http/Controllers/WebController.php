<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\layout;


class WebController extends Controller
{
    public function about()
    {
        return view('about', [
            "title" => "About"
        ]);
    }

    public function home ()
    {
        return view('index', [
            "title" => "Home"
        ]);
           
    }
    
    public function welcome ()
    {
        return view('welcome');
    }

    public function skill ()
    {
        return view('skill', [
            "title" => "Skill"
        ]);
    }
    
    public function contact ()
    {
        return view('contact', [
            "title" => "Contact"
        ]);
    }

    
}