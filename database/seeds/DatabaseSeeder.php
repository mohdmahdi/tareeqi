<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class , 100)->create();
        //factory(\App\Section::class , 8)->create();
        //factory(\App\Question::class , 70)->create();
        //factory(\App\Answer::class , 7000)->create();
        //factory(\App\Quiz::class , 200)->create();








    }
}
