<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StudentClass $classes)
    {
        $data = $classes->latest()->get();

        return view ('student-classes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('student-classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StudentClass $student_class)
    {
        /* set validate to request */
        $this->validate($request, [
            'name' => ['required', 'min:5', 'max:255'],
            'slug' => ['required', 'min:5', 'max:255']
        ]);

        /* processing to add new data */
        $student_class->name = $request->name;
        $student_class->slug = $request->slug;
        $student_class->save();

        /* send result to view */
        return redirect()->route('student-classes.index')->with('success', 'Student Class has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentClass $student_class)
    {
        return view ('student-classes.edit', compact('student_class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
