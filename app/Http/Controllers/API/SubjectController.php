<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $sql = new Subject;
        $sql->student_ID = $request->input('student_ID');
        $sql->subject_name = $request->input('subject_name');
        $sql->description = $request->input('description');
        $sql->save();
        return response()->json([
            'status'=>200,
            'message'=>'Subjects Added!',
        ]);
    }
}
