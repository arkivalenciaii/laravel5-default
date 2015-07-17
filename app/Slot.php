<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{

	protected $table = 'slots';
    protected $fillable = ['slot_code', 'slot_rank','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function status()
    {
    	return $this->belongsToMany('App\Status');
    }

}
