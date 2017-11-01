<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
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

        $city = new City();
        $city->name = "Hà Nội";
        $city->save();

        $city = new City();
        $city->name = "TP. Hồ Chí Minh";
        $city->save();

        $city = new City();
        $city->name = "Bắc Ninh";
        $city->save();

        $city = new City();
        $city->name = "Nha Trang";
        $city->save();

        $city = new City();
        $city->name = "Khánh Hoà";
        $city->save();

        $city = new City();
        $city->name = "Hải Phòng";
        $city->save();

        $city = new City();
        $city->name = "Thanh Hoá";
        $city->save();

        $city = new City();
        $city->name = "Đà Nẵng";
        $city->save();

        $city = new City();
        $city->name = "Huế";
        $city->save();

        $city = new City();
        $city->name = "Vũng Tàu";
        $city->save();
    }
}
