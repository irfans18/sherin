<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListPesertaPageController extends Controller
{
   public function index(){
      $username = $this->getUsername();
      $peserta = User::has('GroupMember')->where('role', User::PESERTA)->get();
      // dd($peserta);
      return view('list-peserta',[
         'username' => $username,
         'peserta' => $peserta,
      ]);
   }

  
   public function delete($id){
      $member = User::find($id);
      $member->delete();
      return redirect()->back();
   }

   private function getApprovedToken($peserta){
      $query = $this->getRequest();

      for($i=0; $i < count($peserta); $i++){
         $peserta[$i]['requests_acc'] = 0;
      }

      if ($query != NULL){
         for($i=0; $i < count($peserta); $i++){
            for ($j = 0; $j < count($query); $j++){
               if($peserta[$i]['id'] == $query[$j]['user_id']){
                  if($query[$j] == 1) $peserta[$i]['requests_acc']++; 
               }
            }
         }
      }

      return $peserta;

   }

   private function getUserRequest($peserta) {
      $query = $this->getRequest();
      
      for($i=0; $i < count($peserta); $i++){
         $peserta[$i]['requests'] = 0;
      }

      if ($query != NULL){
         for($i=0; $i < count($peserta); $i++){
            for ($j = 0; $j < count($query); $j++){
               if($peserta[$i]['id'] == $query[$j]['user_id']){
                  $peserta[$i]['requests']++; 
               }
            }
         }
      }

      // dd($peserta);
      return $peserta;
   }

   private function getRequest(){
      $query = ModelsRequest::all()->toArray();
      return $query;
   }

   private function getGroupName($peserta){
      
      $groups = $this->getAllGroups();
      $members = $this->getAllGroupMembers();

      for($i=0; $i < count($peserta); $i++){
         $peserta[$i]['group'] = 0;
      }

      for ($i=0; $i<count($peserta); $i++){
         for ($j=0; $j<count($members); $j++){
            if ($peserta[$i]['id'] == $members[$j]['user_id']){
               $peserta[$i]['group'] = $members[$j]['group_id'];
            }
         }
      }

      // dd($result);

      for ($i=0; $i<count($peserta); $i++){
         for ($j=0; $j<count($groups); $j++){
            if ($peserta[$i]['group'] == $groups[$j]['id']){
               $peserta[$i]['group'] = $groups[$j]['name'];
            }elseif ($peserta[$i]['group'] == 0){
               $peserta[$i]['group'] = "dihapus dari kelompok";
            }
         }
      }
      return $peserta;
   }

   private function getAllGroupMembers(){
      $query = GroupMember::all()->toArray();
      return $query;
   }

   private function getAllGroups(){
      $query = Group::all()->toArray();
      return $query;
   }

   private function getPeserta(){
      $query = User::where('role', 0)->get()->toArray();
      $result = $this->getGroupName($query);
      $result = $this->getUserRequest($result);
      // dd($result);
      $result = $this->getApprovedToken($result);

      return $result;
   }

   private function getUsername(){
      return Auth::user()->name;
   }
   
   public function peserta(){
      $data = User::where('role', User::PESERTA)->get();
      view()->share([
         'data' => $data
      ]);
      return view('list-peserta2');
   }
}
