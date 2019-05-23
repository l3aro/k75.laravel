<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Trang gốc';
        return view('client.index', compact('title'));
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function about()
    {
        return view('client.about');
    }
}
