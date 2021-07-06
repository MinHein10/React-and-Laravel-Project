<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json([
                'status'=>200,
                "message"=>"Students List",
                "students"=>$students,
            ]);
    }
}
