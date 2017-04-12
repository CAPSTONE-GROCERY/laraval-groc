<?php

use App\Store;
use App\Product;
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
        //$this->call('storeTableSeeder');
        //$this->call('deptTableSeeder');
        //$this->call('storeDeptTableSeeder');
        $this->call('productsTableSeeder');
    }
}

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

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->delete();

        Product::create([
            'name' => 'product1',
            'quantity' => '2',
            'price' => '3.50',
            'isAvailable' => 'true',
            'description' => 'product 1 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product2',
            'quantity' => '22',
            'price' => '4.20',
            'isAvailable' => 'true',
            'description' => 'product 2 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product3',
            'quantity' => '12',
            'price' => '3.45',
            'isAvailable' => 'true',
            'description' => 'product 3 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product4',
            'quantity' => '444',
            'price' => '4.20',
            'isAvailable' => 'true',
            'description' => 'product 4 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product5',
            'quantity' => '0',
            'price' => '999.99',
            'isAvailable' => 'false',
            'description' => 'product 5 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product6',
            'quantity' => '999',
            'price' => '5.67',
            'isAvailable' => 'true',
            'description' => 'product 6 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product7',
            'quantity' => '666',
            'price' => '6.66',
            'isAvailable' => 'true',
            'description' => 'product 7 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product8',
            'quantity' => '0',
            'price' => '1.25',
            'isAvailable' => 'false',
            'description' => 'product 8 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product9',
            'quantity' => '112',
            'price' => '9.99',
            'isAvailable' => 'true',
            'description' => 'product 9 description',
            'department_id' => 1,
            //$this->timestamps = false
        ]);

        Product::create([
            'name' => 'product10',
            'quantity' => '876',
            'price' => '.99',
            'isAvailable' => 'true',
            'description' => 'product 10 description',
            'department_id' => 1,
             //$this->timestamps = false
        ]);

        $this->timestamps = false;



    }
}