<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function newsShow(){
        return view('frontend.news');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function privacypolicy(){
        return view('frontend.privacypolicy');
    }
    public function readblog(){
        return view('frontend.readblog');
    }
}
