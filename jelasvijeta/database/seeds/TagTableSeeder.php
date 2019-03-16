<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Tag');

        for($i = 1; $i <=5; $i++){

        DB::table('tags')->insert([
            'title' => $faker->sentence(),
            'slug' =>$faker->sentence(),
            
            
            
            
        ]);
        }
    }
}
