<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontpage');
    }

    public function profile()
    {
        return view('profile');
    }

    public function Infokampus()
    {
        return view('info_kampus');
    }
}
