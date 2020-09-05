<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'username' => 'admin1',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('password'),
        ]);


        User::create([
            'username' => 'admin2',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'username' => 'admin3',
            'email' => 'admin3@admin.com',
            'password' => bcrypt('password'),
        ]);
    }
}
