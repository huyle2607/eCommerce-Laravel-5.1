<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->delete();

        User::create(array(
        	'name' => 'Quốc Huy',
            'gender' => '1',
            'dob' => '1994-07-26', //Date() format YYYY-MM-DD
            'phone' => '01238014905',
            'email' => 'huyle@gmail.com',
            'password' => '123',
            'admin' => '1'
        	));

        User::create(array(
        	'name' => 'Tèo Lê',
            'gender' => '1',
            'dob' => '1998-12-31',
            'phone' => '01234568888',
            'email' => 'teo@gmail.com',
            'password' => '123',
            'admin' => '0'
        	));
    }
}
