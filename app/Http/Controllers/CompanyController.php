<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }

    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
}
