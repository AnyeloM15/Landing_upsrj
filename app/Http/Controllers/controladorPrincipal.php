<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPrincipal extends Controller
{
    public function index(){
        return view("pages.index");
    }

    public function about(){
        return view("pages.about");
    }

    public function blog(){
        return view("pages.blog");
    }

    public function blog_single(){
        return view("pages.blog_single");
    }

    public function contact(){
        return view("pages.contact");
    }

    public function course(){
        return view("pages.course");
    }

    public function courses(){
        return view("pages.courses");
    }




}
