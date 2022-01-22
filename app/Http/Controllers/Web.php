<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;
use App\Models\Student;

class Web extends Controller
{
    //
    public function indexPage(Type $var = null)
    {
        # return start page
        return View::make('welcome');
    }

    public function forgetPasswordPage(Request $req)
    {
        $user = User::where('id_number', $req->id)->first();

        if ($user) {
            $data = $user->only('name', 'secret_question', 'id_number');
            
            return view('forgetPassword', compact('data'));
            // return gettype($data);
            // return $req;
        }
        return redirect('/')->with('message', 'User Not Found..!');
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
        $data = Student::where('id_number', $req->id)->first();
        if (!$user || ($req->password != $user->password)) {
            return redirect('/')->with('message', 'Please Enter Valide User ID and Password');
        }
        if ($user->user_type == 1) {
            return view('teacher.dashboard', compact('user'));
        }
        return view('student.dashboard', compact('user', 'data'));
    }

    public function resetPassword(Request $req)
    {
        # reseting password
        $user = User::where('id_number', $req->id)->first();
        if ($user && ($user->secret_que_ans == $req->answer) && ($req->password == $req->config_password)) {
            $user->password = $req->password;
            $user->save();
            return redirect('/')->with('message', 'Password Updated');
        }
        return redirect('/')->with('message', 'Password Not Updated');
    }

    public function updatePassword(Request $req)
    {
        $data = User::where('id_number', $req->id)->first();

        if ($req->new_password == $req->password_conferm && $data->password == $req->current_password) {
            $data->password = $req->new_password;
            $data->save();
            return redirect()->back()->with('message1', 'password changed');
        }
        return redirect()->back()->with('message2', 'password not changed');
    }
}
