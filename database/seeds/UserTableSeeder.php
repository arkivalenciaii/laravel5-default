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
        	'name' => 'Arki',
        	'email' => 'arki@email.com',
        	'password' => bcrypt('123qwe'),
        ]);

        App\User::create([
        	'name' => 'Arki2',
        	'email' => 'arki2@email.com',
        	'password' => bcrypt('123qwe'),
        ]);
    }
}
