<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname'     => 'Admin',
            'lname'     => 'Admin',
            'phone'     => '00000000',
            'role'     => '1',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
