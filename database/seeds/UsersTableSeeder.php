<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()->each(function($u) {
        	if ($u->id === 1) {
        		$u->update([
        			'username' => 'admin',
        			'is_admin' => 1,
        			'password' => bcrypt('admin')
        		]);
        	}
        });
    }
}
