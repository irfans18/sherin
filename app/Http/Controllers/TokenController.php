<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Cloner\Data;

class TokenController extends Controller
{

   public function generate()
   {
      $code = Token::generate();
      $user = Auth::user()->id;
      $ed_time = $this->setExpiredTime(30);

      $token = Token::create([
         'user_id' => $user,
         'token_code' => $code,
         'expired_time' => $ed_time,
      ]);
      $token->save();
      // dd($token);
      // return redirect('/narasumber');
      return redirect()->back();
   }

   private function setExpiredTime($minutes_to_add = 15)
   {

      $time = new DateTime();
      $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

      $stamp = $time->format('Y-m-d H:i:s');

      return $stamp;
   }
}
