<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
			DB::table('roles')->truncate();
			DB::table('role_user')->truncate();
			// TestDummy::times(20)->create('App\Post');
			DB::table('roles')->insert([
				[
					'name' => 'admin',
					'display_name' => 'Administrator',
					'description' => 'Administrative user'
				],
				[
					'name' => 'mod',
					'display_name' => 'Moderator',
					'description' => 'Moderator'
				],
				[
					'name' => 'user',
					'display_name' => 'User',
					'description' => 'User'
				],
			]);

			DB::table('role_user')->insert([
				['user_id' => 1, 'role_id' => 1],
				['user_id' => 2, 'role_id' => 2],
				['user_id' => 3, 'role_id' => 3],
			]);
    }
}
