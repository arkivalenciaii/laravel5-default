<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        App\Subject::create(array(
            'subject_code' => 'ICST102',
            'subject_desc' => 'Computer Programming',
        ));

        App\Subject::create(array(
            'subject_code' => 'ICST103',
            'subject_desc' => 'Data Structures',
        ));

        App\Subject::create(array(
            'subject_code' => 'ICST100',
            'subject_desc' => 'Intro To Computers',
        ));

    }
}
