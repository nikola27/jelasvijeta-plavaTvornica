<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Category');

        for($i = 1; $i <=5; $i++){

        DB::table('categories')->insert([
            'title' => $faker->sentence(),
            'slug' =>$faker->sentence(),
            
            
            
            
        ]);
        }
    }
}
