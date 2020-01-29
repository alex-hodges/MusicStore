<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guitars
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Guitar '.$i,
                'slug' => 'Guitar-'.$i,
                'details' => 'Electric Guitar, Single-Coil Pickups, Rosewood Fingerboard',
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                
            ]);
        }

        
    }
}
