<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

		for( $i = 0; $i < 50; $i++ ) {

			Product::create([
				'category_id' => 1,
				'sku' => 'sku'.$i,
				'name' => $faker->sentence,
				'description' => $faker->text,
				'price' => $faker->randomNumber(2),
				'isAvailable' => true,
				'image' => $faker->imageUrl($width = 640, $height = 480)
				]);
		}
	}

}
