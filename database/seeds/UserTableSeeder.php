<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
		$user->name = 'Samuel Jackson';
		$user->email = 'samueljackson@jackson.com';
		$user->password = bcrypt('samueljackson@jackson.com');
		$user->save();
		$user->roles()->attach(Role::where('name', 'user')->first());

		$admin = new User;
		$admin->name = 'MD ABDUL HALIM';
		$admin->email = 'ahscse@gmail.com';
		$admin->password = bcrypt('ahscse@gmail.com');
		$admin->save();
		$admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
