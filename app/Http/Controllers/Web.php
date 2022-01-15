<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;

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

    public function login(Request $req)
    {
        # login buttun
        $user = User::where('id_number', $req->id)->first();
        if (!$user || ($req->password != $user->password)) {
            return 'null';
        }
        if ($user->user_type == 1) {
            return view('teacher.dashboard');
        }
        return view('student.dashboard');
    }
}
