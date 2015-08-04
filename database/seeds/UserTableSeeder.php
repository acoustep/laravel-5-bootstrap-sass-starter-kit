<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
			DB::table('users')->truncate();
			// TestDummy::times(20)->create('App\Post');
			DB::table('users')->insert([
				[
					'name' => 'Admin',
					'email' => 'admin@admin.com',
					'password' => Hash::make('123admin')
				],
				[
					'name' => 'Moderator',
					'email' => 'mod@mod.com',
					'password' => Hash::make('123mod')
				],
				[
					'name' => 'User',
					'email' => 'user@user.com',
					'password' => Hash::make('123user')
				],
			]);
    }
}
