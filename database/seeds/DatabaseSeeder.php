<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // $faker = Faker\Factory::create();

    public function run()
    {
        $this->call(UsersTableSeeder::class);
         // $this->call(PostTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(Job_postTableSeeder::class);
         $this->call(pbpg_jobTableSeeder::class);
         $this->call(RecruitmentsTableSeeder::class);
         $this->call(PbpgsTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(JobsTableSeeder::class);
    }
}
