<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }

    // Show enrollment form
    public function create()
    {
        return view('students.enrollment');
    }

    // Save new student
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:100',
            'email'  => 'required|email|unique:students',
            'class'  => 'required|string|max:50',
        ]);

        Student::create($request->all());

        return redirect()->route('students.list')
                         ->with('success', '✅ Student added successfully!');
    }

    // Edit student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name'   => 'required|string|max:100',
            'email'  => 'required|email|unique:students,email,'.$student->id,
            'class'  => 'required|string|max:50',
        ]);

        $student->update($request->all());

        return redirect()->route('students.list')
                         ->with('success', '✏️ Student updated successfully!');
    }

    // Delete student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.list')
                         ->with('success', '🗑️ Student deleted successfully!');
    }
}
