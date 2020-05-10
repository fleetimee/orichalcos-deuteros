<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'novian.andika@students.amikom.ac.id')->first();

        if (!$user) {
            User::create([
                'name' => 'Novian Andika',
                'email' => 'novian.andika@students.amikom.ac.id',
                'role' => 'admin',
                'password' => Hash::make('novian227')
            ]);
        }
    }
}
