<?php

use Illuminate\Database\Seeder;

class RecruitmentsTableSeeder extends Seeder
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
        for ($i=0; $i < 10; $i++) { 
            DB::table('recruitments')->insert([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'address' => $faker->address,
            'about' => $faker->text(),
            'rate'  => $faker->biasedNumberBetween($min = 1, $max =5),
            'user_id' => $faker->biasedNumberBetween($min = 1,$max = 10),
            'mobile' => $faker->tollFreePhoneNumber(),
        ]);
        }
        
    }
}
