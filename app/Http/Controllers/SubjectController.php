<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subject;

class SubjectController extends Controller
{
    public function index($code)
    {
        $subject = Subject::where('subject_code', '=', $code)->first();

        return view('subjects.index')->with('subject', $subject);
    }

//    public function getAddPrereq($sub_id,$id)
//    {
//        $subject = Subject::find($id);
//        $sub_id =
//    }
}
