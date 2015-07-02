<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    protected $table = 'subjects';

    protected $fillable = ['subject_code', 'subject_desc'];

    function users()
    {
        return $this->belongsToMany('App\User');
    }

    function prerequisites()
    {
        return $this->belongsToMany('App\Subject', 'subject_prereq', 'subject_id', 'prereq_id');
    }

//    function add_prereq(Subject $subject)
//    {
//        $this->pre_requisite()->attach($subject->id);
//    }
}
