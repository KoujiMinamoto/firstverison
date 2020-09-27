<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
   public function userLogin($loginMessage) {

      $userCheck = DB::table('one_printuser')->where(['user_name' => $$loginMessage.username]);
      $passwordCheck = DB::table('one_printuser')->where(['user_password' => $$loginMessage.password]);
      if ($userCheck == null || $passwordCheck == null) {
         return false;
      } else {
         return true;
      }
        
   }
}
