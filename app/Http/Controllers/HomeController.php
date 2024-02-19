<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!session()->has('alert_shown')) {
            session()->put('alert_shown', true);
            return view('backend.index', ['showAlert' => true]);
        }
        return view('backend.index', ['showAlert' => false]);
    }
}
