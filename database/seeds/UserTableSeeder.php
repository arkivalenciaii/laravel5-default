<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        App\User::create([
        	'first_name' => 'Arki',
        	'last_name' => 'Valencia',
        	'email' => 'arki@email.com',
        	'password' => bcrypt('123qwe'),
        ]);

        App\User::create([
        	'name' => 'Arki2',
        	'last_name' => 'Valencia2',
        	'email' => 'arki2@email.com',
        	'password' => bcrypt('123qwe'),
        ]);
    }
}
