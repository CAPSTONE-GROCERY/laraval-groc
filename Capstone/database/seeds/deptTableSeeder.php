<?php

use Illuminate\Database\Seeder;

class deptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'id' => 1,
            'name' => 'Produce',
            'created_by' => 1,
            'modified_by' => 1,
        ]);
    }
}
