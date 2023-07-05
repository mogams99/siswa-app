<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
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
        $student->created_at = Carbon::now();
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student has been created!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->class = $request->class;
        $student->updated_at = Carbon::now();
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student has been updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student has been deleted!');
    }
}
