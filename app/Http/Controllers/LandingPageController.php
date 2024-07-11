<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function car()
    {
        return view("car");
    }
    public function contact()
    {
        return view("contact");
    }
}
