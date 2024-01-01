<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        return view('post');
    }

    public function content()
    {
        return view('content');
    }

    public function about()
    {
        return view('about');
    }
}
