<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class controladorPrincipal extends Controller
{
    public function index(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view("pages.index",compact('news'));
    }

    public function about(){
        return view("pages.about");
    }

    public function blog(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view("pages.blog",compact('news'));
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
