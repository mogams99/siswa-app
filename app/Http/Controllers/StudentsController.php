<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentClass;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    public function index(Student $student)
    {
        $data = $student->latest()->get();

        return view('students.index', compact('data'));
    }

    public function create()
    {
        $classes = StudentClass::select('id', 'name', 'slug')->get();
        return view('students.create', compact('classes'));
    }

    public function store(Request $request, Student $student)
    {
        /* set validate to request */
        $this->validate($request, [
            'name' => ['required', 'min:5', 'max:255'], 
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'address' => ['required', 'min:5', 'max:255'],
            'phone_number' => ['required', 'numeric', 'digits_between:10,12'], 
            'student_class_id' => ['required']
        ]);

        /* processing to upload photo */
        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('photos/students');
        }

        /* processing to create new students */
        $student->name = $request->name;
        $student->photo = $photo;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->student_class_id = $request->student_class_id;
        $student->created_at = Carbon::now();
        $student->save();

        /* send result to view */
        return redirect()->route('students.index')->with('success', 'Student has been created!');
    }

    public function edit(Student $student)
    {
        $classes = StudentClass::select('id', 'name', 'slug')->get();
        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, Student $student)
    {
        // dd($request->all(), 'request all'); // for debugging

        /* set validate to request */
        $this->validate($request, [
            'name' => ['required', 'min:5', 'max:255'], 
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'address' => ['required', 'min:5', 'max:255'],
            'phone_number' => ['required', 'numeric', 'digits_between:10,12'], 
            'student_class_id' => ['required']
        ]);

        /* processing to upload photo */
        $photo = null;
        $get_path = $student->photo; 
        if ($request->hasFile('photo')) {
            /* ternary when path is null */
            $get_path = $get_path == null ? $request->file('photo')->store('photos/students') : $get_path;

            if (Storage::exists($get_path)) {
                Storage::delete($get_path);
            }
            $photo = $request->file('photo')->store('photos/students');
        }

        /* processing to update data */
        $student->name = $request->name;
        $student->photo = $photo;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->student_class_id = $request->student_class_id;
        $student->updated_at = Carbon::now();
        $student->save();

        /* send result to view */
        return redirect()->route('students.index')->with('info', 'Student has been updated!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('danger', 'Student has been deleted!');
    }
}
