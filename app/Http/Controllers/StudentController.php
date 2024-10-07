<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function store(Request $request) {
        $student = new Student();
        $student->name = $request->name; 
        $student->school_id = $request->school_id; 
        $student->save(); 
    
        return response()->json($student);
    }

    public function show($id) {
        $student = Student::findOrFail($id); 
        return response()->json($student); 
    }

    public function destroy($id) {
        Student::destroy($id);
        return response()->json(['message' => 'Student deleted']);
    }
    
}
