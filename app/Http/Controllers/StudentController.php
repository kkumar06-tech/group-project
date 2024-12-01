<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
function add_student(Request $request){
  //  return $request->input();
$student = new Student();
$student ->name=$request->name;
$student ->mat_no=$request->mat_no;
if ($student->save()) {
    return response()->json(['message' => 'Student added successfully'], 201);
} else {
    return response()->json(['message' => 'Failed to add student'], 500);
}



}


}
