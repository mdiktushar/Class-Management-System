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

    public function saveChange(Request $req)
    {
        # code...
        // return $req;
        $data = Student::where('id_number', $req->id)->first();
        $user = user::where('id_number', $req->id)->first();
        
        $data->department = $req->department;
        $data->father = $req->father;
        $data->mother = $req->mother;
        $data->sex = $req->sex;
        $data->address = $req->address;
        $data->mobile = $req->mobile;
        $data->save();

        return view('student.dashboard', compact('data', 'user'));
    }

    public function changePassword($id)
    {
        # code...
        return view('changePassword', compact('id'));
    }
}
