<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Admin',
            'email' => 'admin@this',
            'password' => Hash::make('password'),
            'role' => 2
        ]);

        User::create([
            'name' => 'Narasumber',
            'email' => 'narasumber@this',
            'password' => Hash::make('password'),
            'role' => 1
        ]);

        User::create([
            'nrp' => '0000000000',
            'name' => 'Peserta',
            'email' => 'peserta@this',
            'password' => Hash::make('password'),
            'role' => 0
        ]);
    }
}
