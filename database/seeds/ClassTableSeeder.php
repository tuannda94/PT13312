<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('classes')->count() == 0) {
            DB::table('classes')->insert([
                [
                    'id' => 1,
                    'name' => 'PT11111',
                    'teacher_name' => 'NV A',
                    'major' => 'CNTT',
                    'max_student' => 50,
                ],
                [
                    'id' => 2,
                    'name' => 'PT22222',
                    'teacher_name' => 'NV B',
                    'major' => 'MKT',
                    'max_student' => 20,
                ],
                [
                    'id' => 3,
                    'name' => 'PT33333',
                    'teacher_name' => 'NV C',
                    'major' => 'CNTT',
                    'max_student' => 50,
                ],
            ]);
        }
    }
}
