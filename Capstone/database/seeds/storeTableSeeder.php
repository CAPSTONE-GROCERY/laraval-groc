<?php

use Illuminate\Database\Seeder;

class storeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'id' => 1,
            'name' => 'Superstore',
            'address' => '123 Main St',
            'PhoneNumber' => 9025555555,
            'isActive' => true,
            'created_by' => 1,
            'modified_by' => 1,
        ]);
    }
}
