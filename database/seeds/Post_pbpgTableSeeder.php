<?php

use Illuminate\Database\Seeder;

class Post_pbpgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
        	DB::table('post_pbpg')->insert([
        		'pbpg_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        		'post_id' => $faker->biasedNumberBetween($min = 1, $max = 11),
                'status' => $faker->boolean(),
                'seen' => $faker->boolean(),
        	]);
        }
    }
}
