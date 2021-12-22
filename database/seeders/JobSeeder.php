<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'jobName'=>'Data Analyst',
        ]);

        DB::table('jobs')->insert([
            'jobName'=>'Cyber Security',
        ]);

        DB::table('jobs')->insert([
            'jobName'=>'Software Engineer',
        ]);

        DB::table('jobs')->insert([
            'jobName'=>'Back End Developer',
        ]);

        DB::table('jobs')->insert([
            'jobName'=>'Front End Developer',
        ]);
    }
}
