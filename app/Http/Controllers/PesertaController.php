<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Group;
use App\Models\Token;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as ModelsRequest;
use PhpParser\Node\Expr\AssignOp\Mod;

class PesertaController extends Controller
{
   public function index(){
      $username = $this->getUsername();
      $group_name = $this->getGroupName($username);
      $requests = $this->getAllRequests();
      $token_acc = $this->countApprovedToken($requests);
      $token_deny = $this->countDeniedToken($requests);
      $total_req = count($requests);
      return view('peserta',[
         'username' => $username,
         'group_name' => $group_name,
         'requests' => $requests,
         'token_acc' => $token_acc,
         'token_deny' => $token_deny,
         'total_req' => $total_req,
      ]);
   }

   public function submitToken(Request $request){
      $token_code = $request->token_code;
      $token = Token::where('token_code', $token_code)->first();
      if($token != null){
         $token = $token->toArray();
      
         $token_id = $token['id'];
         $status = $this->setStatus($token);
         // dd($status);
         // $this->isCreated($token_id);
         $submit = ModelsRequest::firstOrCreate([
               'user_id' => Auth::user()->id,
               'token_id' => $token_id,
               'status' => $status,
         ]);
         $submit->save();
         // dd($submit);
      }
      return redirect('/peserta');
      
   }

   private function countDeniedToken($req){
      $count = 0;

      foreach($req as $row){
         if($row->status == 2) $count++;
      }
      // dd($count);
      return $count;
   }

   private function countApprovedToken($req){
      $count = 0;

      foreach($req as $row){
         if($row->status == 1) $count++;
      }
      // dd($count);
      return $count;
   }

   private function getAllRequests(){
      $user_id = Auth::user()->id;
      $all_request = DB::table('tokens')
               ->selectRaw('users.name, users.email, tokens.token_code, requests.created_at, requests.status ')
               ->Join('requests','tokens.id','=','requests.token_id')
               ->Join('users','tokens.user_id','=','users.id')
               ->where('requests.user_id', $user_id)
               ->get();
      if($all_request != null){
         $all_request = $all_request->toArray();
      }
      
      // dd($all_request);
      return $all_request;
   }

   private function setStatus($token){
      $now = (new DateTime())->format('Y-m-d H:i:s');
      $status = $this->isCreated($token['id']);
      if($status == 0){
         if($now <= $token['expired_time']){
            return 0;
         }else{
            return 2;
         }
      }else{
         return $status;
      }
   }

   private function isCreated($id){
      $req = ModelsRequest::where([
            'token_id' => $id,
            'user_id' => Auth::user()->id,
      ])->first();

      if ($req != null){
         $req = $req->toArray();
         return $req['status'];
      }else{
         return 0;
      }

      // dd($req);
   }

   private function getGroupName($username){
      $group_id = GroupMember::where('user_id', Auth::user()->id)->get()->toArray();
      $group_id = $group_id[0]['group_id'];

      $group = Group::find($group_id)->toArray();
      
      // dd($group);
      return $group['name'];
   }

   private function getUsername(){
      return Auth::user()->name;
   }
}
