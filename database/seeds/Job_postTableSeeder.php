<?php

use Illuminate\Database\Seeder;

class Job_postTableSeeder extends Seeder
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
        	DB::table('job_post')->insert([
        		'post_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        		'job_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        	]);
        }
    }
}
