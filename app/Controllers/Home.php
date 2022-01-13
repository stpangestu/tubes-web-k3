<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
    public function home()
    {
        return view('home');
    }
    public function re_cipe()
    {
        return view('re_cipe');
    }
}
