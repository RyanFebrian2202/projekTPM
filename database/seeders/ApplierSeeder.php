<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appliers')->insert([
            'name' => 'Ryan Febrian',
            'age' => 18,
            'job_id' => '1',
            'CV' => 'storageCV/As25SqsZdgWNbTzoC2MzUq8k92JKAkAN9YYmQnJI.pdf',
        ]);

        DB::table('appliers')->insert([
            'name' => 'Vincencius Ivank',
            'age' => 20,
            'job_id' => '2',
            'CV' => 'storageCV/As25SqsZdgWNbTzoC2MzUq8k92JKAkAN9YYmQnJI.pdf',
        ]);
    }
}
