<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;
use App\Models\HomeModel;

class NewsSeeder extends Seeder
{
	public function run()
	{
		//

		$news = new HomeModel;
		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 50; $i++) {
			$news->save(
				[
					'title'			=> $faker->title,
					'news'       	=> $faker->realText,
					'created_at'	=> Time::createFromTimestamp($faker->unixTime()),
					'updated_at'	=> Time::now()
				]
			);
		}

		// $model = model('HomeModel');

		// $model->insert([
		// 	'email'      => static::faker()->email,
		// ]);
	}
}
