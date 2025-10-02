<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Show all teachers
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.list', compact('teachers'));
    }

    // Show enrollment form
    public function create()
    {
        return view('teachers.enrollment');
    }

    // Save new teacher
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:teachers',
            'subject' => 'required|string|max:50',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.list')
                         ->with('success', '✅ Teacher added successfully!');
    }

    // Edit teacher
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    // Update teacher
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:teachers,email,'.$teacher->id,
            'subject' => 'required|string|max:50',
        ]);

        $teacher->update($request->all());

        return redirect()->route('teachers.list')
                         ->with('success', '✏️ Teacher updated successfully!');
    }

    // Delete teacher
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.list')
                         ->with('success', '🗑️ Teacher deleted successfully!');
    }
}
