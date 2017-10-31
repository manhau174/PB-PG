<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        static $password;
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
        	DB::table('users')->insert([
        		'name' => $faker->name,
		        'email' => $faker->unique()->safeEmail,
		        'password' => $password ?: $password = bcrypt('secret'),
		        'permission' => $faker->biasedNumberBetween($min=1,$max=3),
		        'remember_token' => str_random(10),
                
        	]);
        }
    }
}
