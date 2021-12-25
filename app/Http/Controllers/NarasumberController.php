<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NarasumberController extends Controller
{

   public function index(){
      $username = $this->getUsername();
      $token = $this->getTokenHistory();
      $own_token = count($token);
      $total_token = $this->getTotalToken();
      $token_acc = $this->countAllApprovedToken($token);
      $token_deny = $this->countAllDeniedToken($token);
      // dd($token_deny);
      return view('narasumber',[
                  'username' => $username,
                  'token' => $token,
                  'own_token' => $own_token,
                  'total_token' => $total_token,
                  'token_acc' => $token_acc,
                  'token_deny' => $token_deny,
               ]);
   }


   public function getTokenDetail($token_id){
      $username = $this->getUsername();
      $token = Token::find($token_id);
      $token_code = $token['token_code'];
      $requests = $this->getTokenRequest($token_id);
      $total_request = count($requests);
      $request_acc = $this->countApprovedRequest($requests);
      $request_deny = $this->countDeniedRequest($requests);
      // dd($requests);
      return view('narasumber-token-detail',[
         "username" => $username,
         "requests" => $requests,
         "total_request" => $total_request,
         "request_acc" => $request_acc,
         "request_deny" => $request_deny,
         "token_code" => $token_code,
      ]);
   }

   private function getUsername(){
      return Auth::user()->name;
   }

   private function countDeniedRequest($request){
      $count = 0;

      foreach($request as $row){
         if($row['status'] == 2){
            $count++;
         }
      }
      // dd($approved_token);
      return $count;
   }

   private function countApprovedRequest($request){
      $count = 0;

      foreach($request as $row){
         if($row['status'] == 1){
            $count++;
         }
      }
      // dd($approved_token);
      return $count;
   }

   private function countAllDeniedToken($token){
      $count = 0;
      $req = ModelsRequest::where('status',2)->get();
      if($req != null){
         $req = $req->toArray();

         foreach($token as $row){
            foreach($req as $row2){
               if($row['id'] == $row2['token_id']){
                  $count++;
               }
            }
         }
      }

      // dd($count);
      return $count;
   }

   private function getTokenRequest($id){
      $req = ModelsRequest::where('token_id', $id)->get();
      if($req != null) {
         $req = $req->toArray();
         $user_req = DB::table('users')
                  ->selectRaw('users.name, requests.user_id')
                  ->Join('requests','users.id','=','requests.user_id')
                  ->where('requests.token_id', $id)
                  ->get();    
         if($user_req != null){
            $user_req = $user_req->toArray(); 

            for($i=0; $i < count($req); $i++){
               for($j=0; $j < count($user_req); $j++){
                  if($req[$i]['user_id'] == $user_req[$j]->user_id){
                     $req[$i]['username'] = $user_req[$j]->name;
                     // var_dump($row['token_code'], $row2->token_code);
                  }
               }
            }
         }
      }         

      // dd($req);
      return $req;
   }

   private function countAllApprovedToken($token){
      $count = 0;
      $req = ModelsRequest::where('status',1)->get();
      if($req != null){
         $req = $req->toArray();

         foreach($token as $row){
            foreach($req as $row2){
               if($row['id'] == $row2['token_id']){
                  $count++;
               }
            }
         }
      }
      return $count;
   }

   private function getTotalToken(){
      $total = Token::all()->toArray();
      return count($total);
   }

   private function getTokenHistory(){
      $token = Token::where('user_id', Auth::user()->id)
                     ->orderBy('created_at', 'desc')
                     ->get();
      $req_check = ModelsRequest::all()->toArray();
      // dd(($req_check == null));
      if($req_check != null){
         if($token != null){
            $token = $token->toArray();

            $req = DB::table('tokens')
                        // ->select("tokens.code", "tokens.id", DB::raw("COUNT(requests.user_id) as requests"))
                        ->selectRaw('tokens.token_code, count(requests.user_id) as request')
                        ->Join('requests','tokens.id','=','requests.token_id')
                        ->groupBy('tokens.token_code')
                        ->get();
            if($req != null){
               $req = $req->toArray();

               for($i=0; $i < count($token); $i++){
                  for($j=0; $j < count($req); $j++){
                     if($token[$i]['token_code'] == $req[$j]->token_code){
                        $token[$i]['requests'] = $req[$j]->request;
                        // var_dump($row['token_code'], $row2->token_code);
                     }else{
                        $token[$i]['requests'] = 0;
                     }
                  }
               }
            }
         }
      }else{
         for($i=0; $i < count($token); $i++){
            $token[$i]['requests'] = 0;
         }
      }

      return $token;
   }
}