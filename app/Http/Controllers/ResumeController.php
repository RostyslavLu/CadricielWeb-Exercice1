<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function competences()
    {
        return view('competences');
    }

    public function formation()
    {
        return view('formation');
    }

    public function experiences()
    {
        return view('experiences');
    }

    public function contact()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
        return view('contact', ['data' => $request]);
    }
}
