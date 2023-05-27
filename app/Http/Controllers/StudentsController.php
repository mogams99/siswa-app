<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(Student $student)
    {
        $data = $student->all();

        return view('students.index', compact('data'));
    }
}
