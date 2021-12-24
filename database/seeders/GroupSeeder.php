<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->delete();

        $csvFile = fopen(__DIR__ . '/data/group.csv', 'r');

        $isHeader = true;
        while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
            if (!$isHeader) {
                Group::create([
                    "id" => $data[0],
                    "name" => $data[1],
                    "kambing1" => $data[2],
                    "kambing2" => $data[3],
                ]);
            }
            $isHeader = false;
        }

        fclose($csvFile);
    }
}
