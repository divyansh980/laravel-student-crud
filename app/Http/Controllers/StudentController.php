<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

//    public function store(Request $request)
// {
//     $validated = $request->validate([
//         'name' => 'required|string',
//         'email' => 'required|email|unique:students,email',
//         'age' => 'required|integer'
//     ]);

//     Student::create($validated);

//     return redirect()->route('students.index');
// }


public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email',
        'age' => 'required|integer',
    ]);

    Student::create($validated);

    return redirect()->route('students.index')->with('success', 'Student added successfully!');
}





   public function destroy($id)
{
    Student::destroy($id);
    return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
}


    
}
