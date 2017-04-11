<?php

use Illuminate\Database\Seeder;

class storeDeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_departments')->insert([
            'id' => 1,
            'store_id' => '1',
            'department_id' => '1',
        ]);
    }
}
