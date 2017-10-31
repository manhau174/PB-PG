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
        DB::table('users')->insert([
                'name' => "Hậu Mẫn",
                'email' => "manhau.recruitment@gmail.com",
                'password' => '$2y$10$h12try.EAE9Jh7k8.a2yKuqnq96V9bl4o2R17peD.UAsHhrYdROmC',
                'permission' => 2,
                'remember_token' => str_random(10),
                
            ]);
        DB::table('users')->insert([
                'name' => "Hậu",
                'email' => "manhau.174@gmail.com",
                'password' => '$2y$10$h12try.EAE9Jh7k8.a2yKuqnq96V9bl4o2R17peD.UAsHhrYdROmC',
                'permission' => 3,
                'remember_token' => str_random(10),
                
            ]);
    }
}
