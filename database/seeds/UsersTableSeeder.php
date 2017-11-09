<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        \App\User::create([
            'name' => 'Lucian',
            'email' => 'contact@exceedbuy.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ]);
        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ]);
    }

}
