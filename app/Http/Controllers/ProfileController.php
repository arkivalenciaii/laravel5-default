<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = \Auth::User();
        $subjects = $user->subjects()->get();

        return view('user.index')->with([
           'user' => $user,
            'subjects' => $subjects,
        ]);
    }
}
