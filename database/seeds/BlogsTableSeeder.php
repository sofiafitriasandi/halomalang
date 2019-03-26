<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = faker::create();
		for ($i=0; $i<10; $i++) {
	
         DB::table('users')->insert([
            'email' => $faker->email,
			 'name' => $faker->name,
            'password' => bcrypt('secret'),
        ]);
    }
}
}
