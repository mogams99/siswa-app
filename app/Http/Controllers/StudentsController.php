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

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->class = $request->class;
        $student->save();

        return redirect()->route('students.index');
    }
}
