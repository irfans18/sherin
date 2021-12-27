<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListNarasumberPageController extends Controller
{
   public function index(){
      $username = $this->getusername();
      $narasumber = $this->getNarasumber();
      // dd($narasumber);
      return view('list-narasumber',[
         'username' => $username,
         'narasumber' => $narasumber,
      ]);
   }

   private function getApprovedToken($narsum){
      $query = ModelsRequest::all()->toArray();

      for($i=0; $i < count($narsum); $i++){
         $narsum[$i]['requests'] = 0;
      }

      if ($query != NULL){
         for($i=0; $i < count($narsum); $i++){
            for ($j = 0; $j < count($query); $j++){
               if($narsum[$i]['token'] == $query[$j]['token_id']){
                  if($query[$j] == 1) $narsum[$i]['requests_acc']++; 
               }
            }
         }
      }

      return $narsum;

   }

   private function getToken($narsum){
      $query = Token::all()->toArray();
      
      for($i=0; $i < count($narsum); $i++){
         $narsum[$i]['token'] = 0;
      }

      if ($query != NULL){
         for($i=0; $i < count($narsum); $i++){
            for ($j = 0; $j < count($query); $j++){
               if($narsum[$i]['id'] == $query[$j]['user_id']){
                  $narsum[$i]['token']++;
               }
            }
         }
      }
      // dd($narsum);
      return $narsum;
   }

   private function getNarasumber(){
      $query = User::where('role', 1)->get()->toArray();
      // dd($query);
      $result = $this->getToken($query);
      // $result = $this->getApprovedToken($result);

      // return $query;
      return $result;
   }

   private function getUsername(){
      return Auth::user()->name;
   }
}
