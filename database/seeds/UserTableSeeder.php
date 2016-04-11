<?php

//use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Schema::tables('users')->insert([
        	// 'name' => str_random(10),
        	// 'email' => str_random(10).'@gmail.com',
        	// 'password' => bcrypt('secret'),
        	// ]);
    	$user = new App\User();
    	$user->name = str_random(10);
    	$user->email = str_random(10).'@gmail.com';
    	$user->password = bcrypt('secret');
    	$user->save();
    }
}
