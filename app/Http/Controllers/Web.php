<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    //
    public function indexPage(Type $var = null)
    {
        # return start page
        return View::make('welcome');
    }

    public function forgetPasswordPage(Type $var = null)
    {
        # return forget page
        return view('forgetPassword');
    }

    public function aboutPage(Type $var = null)
    {
        # return about page
        return view('about');
    }
}
