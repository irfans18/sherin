<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListKelompokPageController extends Controller
{

   public function index()
   {
      // if(Auth::user()->role != 2) return redirect()->back();

      $username = $this->getUsername();
      $group = $this->getGroup();
      return view('list-kelompok', [
         'username' => $username,
         'group' => $group,
      ]);
   }

   private function getMember($group){
      $query = GroupMember::all()->toArray();

      for($i=0; $i < count($group); $i++){
         $group[$i]['member'] = 0;
      }

      if ($query != NULL){
         for($i=0; $i < count($group); $i++){
            for ($j = 0; $j < count($query); $j++){
               if($group[$i]['id'] == $query[$j]['group_id']){
                  $group[$i]['member']++; 
               }
            }
         }
      }

      // dd($group);
      return $group;
   }

   private function getGroup(){
      $query = Group::all()->toArray();

      $result = $this->getMember($query);
      // dd($query);
      return $result;
   }

   private function getUsername()
   {
      return Auth::user()->name;
   }
}
