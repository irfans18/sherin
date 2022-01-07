<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NarasumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $narasumber = User::where('role', User::NARASUMBER)->get();

        $csvFile = fopen(__DIR__ . '/data/narasumber.csv', 'r');

        $isHeader = true;
        while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
            if (!$isHeader && $narasumber->doesntContain('email', $data[1])) {
                User::create([
                    "name" => $data[0],
                    "email" => $data[1],
                    "role" => User::NARASUMBER,
                    "password" => Hash::make($data[2]),
                ]);
            }
            $isHeader = false;
        }

        fclose($csvFile);
    }
}
