<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    public function slots()
    {
    	return $this->belongsToMany('App\Slot', 'slot_status','status_id','slot_id');
    }
}
