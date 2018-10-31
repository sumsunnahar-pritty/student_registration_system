<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Student::all();
        //dd($students);

        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {

        //dd($request);

//        $validatedData = $request->validate([
//            'name' => 'required|min:5',
//        ]);

        Student::create($request->all());
        session()->flash('message','Data Inserted Successfully..');
        return redirect('/admin/students');
    }

    public function show($id)//route model binding or Dependency injection
    {
        $student = Student::find($id);
        //dd($student);
        return view('admin.students.show',compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|min:5',
//        ]);


        //dd($request);

        $student = Student::find($id);
        $student->update($request->all());

        session()->flash('message','Data Updated Successfully..');
        return redirect('/admin/students');
    }

    public function destroy($id)
    {
        //dd($id);

        Student::destroy($id);
        session()->flash('message','Data Deleted Successfully..');
        return redirect('/admin/students');
    }


}
