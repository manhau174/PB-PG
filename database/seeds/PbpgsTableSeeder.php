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

        // for ($i=0; $i < 10 ; $i++) { 
        // 	DB::table('pb_pgs')->insert([
        // 		'full_name' => $faker->firstNameMale(),
		      //   'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
		      //   'address' => $faker->address,
		      //   'email' => $faker->unique()->safeEmail,
		      //   'mobile' => $faker->tollFreePhoneNumber(),
		      //   'description' => $faker->text(),
		      //   'profile_picture' => $faker->imageUrl($width = 640, $height = 480),
		      //   'images' => $faker->imageUrl($width, $height, 'people', true, 'Faker'),
		      //   'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
		      //   'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
		      //   'user_id' => $faker->biasedNumberBetween($min = 1 , $max = 10),
		      //   'gender'=>$faker->biasedNumberBetween($min=0,$max=1),
        //         'city_id' => $faker->biasedNumberBetween($min = 1,$max = 10)
        // 	]);
        // }
        DB::table('pb_pgs')->insert([
                'full_name' => "Mẫn Hậu",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "manhau.1744@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product22.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 12,
                'gender'=>1,
                'city_id' => 1
            ]);

        DB::table('pb_pgs')->insert([
                'full_name' => "Nguyễn Thành Trung",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "thanhtrung@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product23.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 1,
                'gender'=>1,
                'city_id' => 1
            ]);

        DB::table('pb_pgs')->insert([
                'full_name' => "Nguyễn Trường An",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "truongan@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product11
                .jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 2,
                'gender'=>1,
                'city_id' => 2
            ]);

        DB::table('pb_pgs')->insert([
                'full_name' => "Phạm Quốc Bảo",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "quocbao@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product24.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 3,
                'gender'=>1,
                'city_id' => 3
            ]);

        DB::table('pb_pgs')->insert([
                'full_name' => "Đào Phúc Hưng",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "phuchung@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product25.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 4,
                'gender'=>1,
                'city_id' => 1
            ]);

        DB::table('pb_pgs')->insert([
                'full_name' => "Phương Mỹ Anh",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "phmyanh@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product20.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 5,
                'gender'=>0,
                'city_id' => 1
            ]);
        DB::table('pb_pgs')->insert([
                'full_name' => "Kiều Hải Ngân",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "haingan@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product26.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 6,
                'gender'=>0,
                'city_id' => 1
            ]);
        DB::table('pb_pgs')->insert([
                'full_name' => "Kim Gia Hân",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "giahan@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product27.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 7,
                'gender'=>0,
                'city_id' => 1
            ]);
        DB::table('pb_pgs')->insert([
                'full_name' => "Ngọc Minh Khuê",
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => "Hoàng Mai, Hà Nội",
                'email' => "minhkhue@gmail.com",
                'mobile' => "0988888888",
                'description' => $faker->text(),
                'profile_picture' => 'images/product28.jpg',
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 160, $max = 200),
                'weight' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50, $max = 70),
                'user_id' => 8,
                'gender'=>0,
                'city_id' => 1
            ]);

    }
}
