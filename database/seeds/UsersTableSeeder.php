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
        User::create([
            'name' => 'Admin',
            'email' => 'rumaramu@gmail.com',
            'password' => Hash::make('Rahasiarumaramu2020'),
            'remember_token' => Str::random(10)
        ]);
    }
}
