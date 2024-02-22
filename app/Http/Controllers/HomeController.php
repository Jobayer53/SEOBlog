<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (!session()->has('alert_shown')) {
            session()->put('alert_shown', true);
            return view('backend.index', ['showAlert' => true]);
        }
        return view('backend.index', ['showAlert' => false]);
    }
}
