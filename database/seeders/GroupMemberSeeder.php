<?php

namespace Database\Seeders;

use App\Models\GroupMember;
use Illuminate\Database\Seeder;

class GroupMemberSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      GroupMember::create([
         'user_id' => 3,
         'group_id' => 1,
      ]);
   }
}
