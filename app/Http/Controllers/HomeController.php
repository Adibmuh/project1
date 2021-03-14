<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('clod');
    }

    public function newbie()
    {
        return view('newbie');
    }

    public function template()
    {
        return view('template');
    }

    public function belajar()
    {
        return view('belajar');
    }

    public function learn()
    {
        return view('learn');
    }

    public function about()
    {
        $nama = 'Mohammad Adib';

        return view('about', ['nama' => $nama]);
    }
};
