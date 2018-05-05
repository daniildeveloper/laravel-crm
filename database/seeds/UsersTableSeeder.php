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
        $password = bcrypt('1234567890');
        User::create(['name' => 'Daniil', 'email' => 'daniildeveloper@ya.ru', 'password' => $password]);
    }
}
