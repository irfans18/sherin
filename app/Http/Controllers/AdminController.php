<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Token;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   protected $users;

   public function __construct(){
      $this->getAllUser();
   }

   public function index(){
      // dd($this->users);
      // $username = $this->getUsername();
      $user['peserta'] = $this->getPeserta();
      $user['narasumber'] = $this->getNarasumber();
      $user['total'] = $user['peserta'] + $user['narasumber'];
      $token = $this->getToken();
      $request = $this->getAllRequest();
      // dd($peserta);

      return view('admin',[
         // 'username' => $username,
         'user' => $user,
         'token' => $token,
         'request' => $request,
      ]);
   }

   private function getDenieddRequest(){
      $request = DB::table('requests')->where('status', 2)->count();
      return $request;
   }
   private function getApprovedRequest(){
      $request = DB::table('requests')->where('status', 1)->count();
      return $request;
   }

   private function getAllRequest(){
      $request=[];
      $today = 0;
      $query = ModelsRequest::all()->toArray();
      foreach ($query as $item){
         $date = Carbon::parse($item['created_at']);
         if($date->isToday()) $today++;
      }
      $request['total'] = count($query);
      $request['today'] = $today;
      $request['acc'] = $this->getApprovedRequest();
      $request['deny'] = $this->getDenieddRequest();

      // dd($request);
      return $request;
   }

   private function getToken(){
      $token = [];
      $today = 0;
      $query = Token::all()->toArray();
      $token['total'] = count($query);
      foreach ($query as $item){
         $date = Carbon::parse($item['created_at']);
         if($date->isToday()) $today++;
      }

      $token['today'] = $today;

      // dd($token);
      return $token;
   }

   private function getNarasumber(){
      $count = 0;
      foreach($this->users as $item){
         if($item['role'] == 1) $count++;
      }

      return $count;
   }

   private function getPeserta(){
      $count = 0;
      foreach($this->users as $item){
         if($item['role'] == 0) $count++;
      }

      return $count;
   }

   private function getAllUser(){
      $this->users = User::all()->toArray();

   }

   private function getUsername(){
      return Auth::user()->name;
   }
}
