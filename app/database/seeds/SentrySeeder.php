<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SentrySeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		DB::table('groups')->delete();
		DB::table('users_groups')->delete();

		Sentry::getUserProvider()->create(array(
			'email'      => 'admin@stonesecretary.com',
			'password'   => "aa123456",
			'first_name' => 'secretary',
			'last_name'  => 'stone',
			'activated'  => 1,
		));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Admin',
			'permissions' => ['admin' => 1],
		));

		// 将用户加入用户组
		$adminUser  = Sentry::getUserProvider()->findByLogin('admin@stonesecretary.com');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$adminUser->addGroup($adminGroup);
	}

}