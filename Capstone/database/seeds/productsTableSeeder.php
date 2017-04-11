<?php
use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
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
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product2',
          'quantity' => '22',
          'price' => '4.20',
          'isAvailable' => 'true',
          'description' => 'product 2 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product3',
          'quantity' => '12',
          'price' => '3.45',
          'isAvailable' => 'true',
          'description' => 'product 3 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product4',
          'quantity' => '444',
          'price' => '4.20',
          'isAvailable' => 'true',
          'description' => 'product 4 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product5',
          'quantity' => '0',
          'price' => '999.99',
          'isAvailable' => 'false',
          'description' => 'product 5 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product6',
          'quantity' => '999',
          'price' => '5.67',
          'isAvailable' => 'true',
          'description' => 'product 6 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product7',
          'quantity' => '666',
          'price' => '6.66',
          'isAvailable' => 'true',
          'description' => 'product 7 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product8',
          'quantity' => '0',
          'price' => '1.25',
          'isAvailable' => 'false',
          'description' => 'product 8 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product9',
          'quantity' => '112',
          'price' => '9.99',
          'isAvailable' => 'true',
          'description' => 'product 9 description',
          'department_id' => 1
      ]);

      Product::create([
          'name' => 'product10',
          'quantity' => '876',
          'price' => '.99',
          'isAvailable' => 'true',
          'description' => 'product 10 description',
          'department_id' => 1
      ]);

    }
}
