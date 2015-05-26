<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Category::truncate();
		Category::create([
			'name' => 'Category 1',
			'description' => 'Category description'
			]);
		
	}

}
