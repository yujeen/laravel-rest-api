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
	    /** @noinspection PhpUndefinedMethodInspection */
	    User::truncate();

	    $password = Hash::make('123456');

	    User::create([
		    'name'     => 'Admin',
		    'email'    => 'admin@gmail.com',
		    'password' => $password,
		    'status'   => 1,
	    ]);

	    // Generate users for our app
	    for ($i = 0; $i < 10; $i++) {
		    User::create([
			    'name'     => Str::random( 10 ),
			    'email'    => 'user_' . $i . '@gmail.com',
			    'password' => $password,
			    'status'   => 1,
		    ]);
	    }
    }
}
