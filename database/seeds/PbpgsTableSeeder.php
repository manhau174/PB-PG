<?php

use Illuminate\Database\Seeder;

class PbpgsTableSeeder extends Seeder
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
        	DB::table('pb_pgs')->insert([
        		'full_name' => $faker->firstNameMale(),
		        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
		        'address' => $faker->address,
		        'email' => $faker->unique()->safeEmail,
		        'mobile' => $faker->tollFreePhoneNumber(),
		        'description' => $faker->text(),
		        'profile_picture' => $faker->imageUrl($width = 640, $height = 480),
		        'images' => $faker->imageUrl($width, $height, 'cats', true, 'Faker'),
		        'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
		        'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
		        'user_id' => $faker->biasedNumberBetween($min = 1 , $max = 10),
		        'gender'=>$faker->biasedNumberBetween($min=0,$max=1),
                'city_id' => $faker->biasedNumberBetween($min = 1,$max = 10)
        	]);
        }
    }
}
