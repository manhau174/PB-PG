<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
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
        	DB::table('jobs')->insert([
        		'name' => $faker->name,
                
        	]);
        }
    }
}
