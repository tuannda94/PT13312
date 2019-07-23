<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() == 0) {
            DB::table('students')->insert([
                [
                    'id' => 1,
                    'name' => 'PT11111',
                    'address' => 'Ha Noi',
                    'university' => 'FPT',
                    'class_id' => '1'
                ],
                [
                    'id' => 2,
                    'name' => 'PT22222',
                    'address' => 'Ha Noi',
                    'university' => 'FPT',
                    'class_id' => '1'
                ],
                [
                    'id' => 3,
                    'name' => 'PT33333',
                    'address' => 'Ha Noi',
                    'university' => 'FPT',
                    'class_id' => '3'
                ],
            ]);
        }
    }
}
