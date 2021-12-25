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
      $token = $this->getTokenHistory();
      $own_token = count($token);
      $total_token = $this->getTotalToken();
      $token_acc = $this->countApprovedToken($token);
      $token_deny = $this->countDeniedToken($token);
      // dd($token);
      return view('narasumber',[
                  'token' => $token,
                  'own_token' => $own_token,
                  'total_token' => $total_token,
                  'token_acc' => $token_acc,
                  'token_deny' => $token_deny,
               ]);
   }

   private function countDeniedToken($token){
      $req = ModelsRequest::where('status',2)->get()->toArray();
      // dd($req);
      $approved_token = 0;

      foreach($token as $row){
         foreach($req as $row2){
            if($row['id'] == $row2['token_id']){
               $approved_token++;
            }
         }
      }
      // dd($approved_token);
      return $approved_token;
   }

   private function countApprovedToken($token){
      $req = ModelsRequest::where('status',1)->get()->toArray();
      // dd($req);
      $approved_token = 0;

      foreach($token as $row){
         foreach($req as $row2){
            if($row['id'] == $row2['token_id']){
               $approved_token++;
            }
         }
      }
      // dd($approved_token);
      return $approved_token;
   }

   private function getTotalToken(){
      $total = Token::all()->toArray();
      return count($total);
   }

   private function getTokenHistory(){
      $token = Token::where('user_id', Auth::user()->id)
                     ->orderBy('created_at', 'desc')
                     ->get()->toArray();
      $req = DB::table('tokens')
                  // ->select("tokens.code", "tokens.id", DB::raw("COUNT(requests.user_id) as requests"))
                  ->selectRaw('tokens.token_code, count(requests.user_id) as request')
                  ->Join('requests','tokens.id','=','requests.token_id')
                  ->groupBy('tokens.token_code')
                  ->get()->toArray();
     
      $requests = [];
      
      foreach ($req as $row){
         $requests[$row->token_code] = $row->request;
      }

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
      return $token;
   }
}

// SELECT tokens.*, COUNT(requests.user_id)
// FROM tokens
// JOIN requests ON requests.token_id=tokens.id
// GROUP BY tokens.token_code;