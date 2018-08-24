<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
        	'password' => bcrypt('admin'),
        	'email' => 'admin@gmail.com',
        	'admin' => 1,
        ]);

        App\User::create([
            'name' => 'Cate',
            'password' => bcrypt('password'),
            'email' => 'cate@gmail.com',
            
        ]);

        App\User::create([
            'name' => 'Rixton',
            'password' => bcrypt('password'),
            'email' => 'rixton@gmail.com',
            
        ]);

        App\User::create([
            'name' => 'Muel',
            'password' => bcrypt('password'),
            'email' => 'muel@gmail.com',
            
        ]);
        // $user = \App\User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        // $user->attachRole('super_admin');
    }
}
