<?php

use Illuminate\Database\Seeder;

class pbpg_jobTableSeeder extends Seeder
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
        	DB::table('pbpg_job')->insert([
        		'pb_pg_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        		'job_id' => $faker->biasedNumberBetween($min = 1, $max = 10),
        	]);
        }
    }
}
