<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student\Student;
use App\Http\Controllers\Controller;


class StudentController extends Controller
{
    public function index(){
        $student = Student::all(); //fetch all products from DB
        return view('student_manage', ['student' => $student]);

    }
}
