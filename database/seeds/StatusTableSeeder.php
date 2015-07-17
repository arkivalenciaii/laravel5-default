<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        App\Status::create([
        	'status' => 'success',
        	'status_message' => 'PAID',
        ]);

        App\Status::create([
        	'status' => 'warning',
        	'status_message' => 'PENDING',
        ]);

        App\Status::create([
        	'status' => 'danger',
        	'status_message' => 'DENIED',
        ]);
    }
}
