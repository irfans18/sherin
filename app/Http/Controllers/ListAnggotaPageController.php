<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListAnggotaPageController extends Controller
{
   public function index($group_id){
      $username = $this->getUsername();
      $member = $this->getMember($group_id);
      $group['id'] = $group_id;
      $group['name'] = $this->getGroupName($group_id);
      return view('list-anggota',[
         'username' => $username,
         'member' => $member,
         'group' => $group,
      ]);
   } 

   public function delete($group_id,$id){
      $member = GroupMember::where('user_id', $id);
      $member->delete();
      return redirect()->back();
   }

   private function getGroupName($group_id){
      $query = Group::find($group_id);
      // dd($query);
      return $query['name'];
   }

   private function getMember($group_id){
      $users = User::all()->toArray();
      $members = GroupMember::where('group_id', $group_id)->get()->toArray();

      $result = [];
      for($i=0; $i<count($users); $i++){
         for($j=0; $j<count($members); $j++){
            if($users[$i]['role'] == 0){
               if($users[$i]['id'] == $members[$j]['user_id']){
                  array_push($result, $users[$i]);
               }
            }
         }
      }
      // dd($result);

      return $result;
   }

   private function getUsername()
   {
      return Auth::user()->name;
   }
}
