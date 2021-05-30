<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Database\Factories\ProductFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            //     $category = \App\Models\Category::create([
            //         'category_name' => 'Accesories',
            //         'category_desc' => 'This category contains accessories'
            //
            //     ]);
            //
            //    Product::factory()->create([
            //        'category_id' => 2
            //    ]);

        Category::factory(5)->create();
        Product::factory(5)->create();
    

        // Product::create([
        //     'product_name' => 'pen',
        //     'product_desc' => ' This is a pen',
        //     'price' => '60',
        //     'old_price' => '20',
        //     'category_id' => $category->id
        // ]);


    }
}
