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
   
    public function run(Faker $faker)
    {
    $imgfaker = \Faker\Factory::create();
    $imgfaker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($imgfaker));
        for ($i=0; $i < 20; $i++) { 
            $newProd = new Product();
            $newProd->title = $faker->word();
            $newProd->body = $faker->sentence(50);
            $newProd->cover =  $imgfaker->imageUrl($width="640", $height="480", ['videogames']);
            $newProd->save();
        }
    }
    
}
