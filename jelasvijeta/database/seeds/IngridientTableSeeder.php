<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class IngridientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Ingridient');

        for($i = 1; $i <=5; $i++){

        DB::table('ingridients')->insert([
            'title' => $faker->sentence(),
            'slug' =>$faker->sentence(),
            
            
            
            
        ]);
        }
    }
}
