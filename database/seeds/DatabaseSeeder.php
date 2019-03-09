<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class)->create([
    		'email' => 'admin@admin.com',
    		'password' => password_hash('12341234', PASSWORD_DEFAULT),
    		'role' => 'admin'
    	]);
    	factory(User::class, 22)->create();
    }
}
