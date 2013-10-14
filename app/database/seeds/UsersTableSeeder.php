<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();
		
		User::create([
				'username' => 'meetgodhani',
				'email' => 'meet@meetgodhani.me',
				'password' => '1234'
			]);

		User::create([
				'username' => 'rameshgodhani',
				'email' => 'ramesh@meetgodhani.me',
				'password' => '1234'
			]);
	}
}