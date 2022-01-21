<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\User;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function editProfile($id)
    {
        # code...
        $data1 = Student::where('id_number', $id)->first();
        $data2 = User::where('id_number', $id)->first();

        return view('/student/updateProfile', compact('data1', 'data2'));
    }
}
