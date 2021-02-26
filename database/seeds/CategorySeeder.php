<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $category_list = config('categories');
        
    //     foreach ($category_list as $cat) {
    //         $newCat = new Category();
    //         $newCat->name = $cat['name'];
    //         $newCat->description = $cat['description'];
    //         $newCat->save();
    //     }
    // }

    public function run(Faker $faker){
        for ($i=0; $i < 100; $i++) { 
            $newCat = new Category();
            $newCat->name = $faker->word();
            $newCat->description = $faker->sentence(50);
            $newCat->save();
        }
    }
}
