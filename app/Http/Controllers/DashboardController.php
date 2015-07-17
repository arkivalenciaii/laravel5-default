<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
    	$user = \Auth::User();
    	$name = $user->name;
    	$slots = $user->slots()->get();
    	
    	return view('dashboard.user.profile')->with([
    		'name' => $name,
    		'slots' => $slots
    	]);
    }

    public function create()
    {
    	$num_slots = \Input::get('num_slots');
    	$check = \Auth::User()->name . '' . Carbon::now();
    	for($i = 0; $i < $num_slots ;$i++)
    	{
    		$slot = new \App\Slot;
    		$slot->slot_code = bcrypt($check);
    		$slot->slot_rank = 0;
    		$slot->user_id = \Auth::User()->id;
    		$slot->save();
    		$status = \App\Status::find(2);
    		$status->slots()->attach($slot);
    		
    	}

    	$user = \Auth::User();
    	$name = $user->name;
    	$slots = $user->slots()->get();

    	return view('dashboard.user.profile')->with([
    		'slots' => $slots,
    		'name' => $name,
    		'num_slots' => $num_slots
    	]);

    }
}
