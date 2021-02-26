<?php

use App\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run(Faker $faker){
    for ($i=0; $i < 100; $i++) { 
        $newProd = new Product();
        $newProd->title = $faker->word();
        $newProd->body = $faker->sentence(50);
        $newProd->cover = $faker->imageUrl($width = 640, $height = 480);
        $newProd->save();
        }
    }
    
}
