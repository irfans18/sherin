<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
   public function accept($token_id, $id){
      // dd($token_id, $id);
      $req = ModelsRequest::find($id);
      $req->update(['status' => 1]);
      // return redirect('/narasumber/'. $token_id . '/detail');
      return redirect()->back();
   }
   
   public function deny($token_id, $id){
      $req = ModelsRequest::find($id);
      $req->update(['status' => 2]);
      // return redirect('/narasumber/'. $token_id . '/detail');
      return redirect()->back();
   }
}
