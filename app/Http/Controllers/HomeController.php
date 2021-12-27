<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NarasumberController;

class HomeController extends Controller
{
   protected $narsum;
   protected $peserta;
   protected $admin;

   public function __construct(){
      $this->narsum = new NarasumberController;
      $this->peserta = new PesertaController;
      $this->admin = new AdminPageController;
   }

   public function index()
   {
      $role = Auth::user()->role;
      // dd($role);
      if($role == 0){
         return $this->peserta->index();
      }elseif($role == 1){
         return $this->narsum->index();
      }elseif($role == 2){
         return $this->admin->index();
      }else{
         return redirect('landing');
      }
   }
   
}
