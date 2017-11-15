<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
      DB::table('users')->delete();

      User::create(array('email' => 'robertcharlesfox@gmail.com', 'password' => Hash::make('fmw-biz!'), 'name' => 'Robert C. Fox'));
      User::create(array('email' => 'scot.self@gmail.com', 'password' => Hash::make('fmw-testing!'), 'name' => 'Scot'));
      User::create(array('email' => 'tedstein@gmail.com', 'password' => Hash::make('fmw-testing!'), 'name' => 'Theo'));
    }

}