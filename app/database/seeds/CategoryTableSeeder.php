<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			Category::create([
				'name' => $faker->sentence($nWords = 6),
				'parent' => 4,
				'path' => '0-4',
				'user_id' => 1,
			]);
		}
	}

}