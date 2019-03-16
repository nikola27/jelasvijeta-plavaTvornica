<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Meal');

        for($i = 1; $i <=5; $i++){

        DB::table('meals')->insert([
            'title' => $faker->sentence(),
            'description' =>implode($faker->paragraphs(1)),
            
            
            
            
        ]);
    }
}
    
    
}
