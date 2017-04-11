<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(storeTableSeeder::class);
        $this->call(deptTableSeeder::class);
        $this->call(storeDeptTableSeeder::class);
        $this->call(productsTableSeeder::class);
    }
}
