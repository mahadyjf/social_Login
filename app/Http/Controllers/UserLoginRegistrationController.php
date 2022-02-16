<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserLoginRegistrationController extends Controller
{
    //
    function CallGithub(){
       $CalssGithubRagistration = Socialite::driver('github')->redirect();
       return $CalssGithubRagistration;
    }
    function LoginCallBack(){
      $user = Socialite::driver('github')->user();
      $token = $user->token;
      $userID = $user->getId();
      $userNickName = $user->getNickname();
      $userName = $user->getName();
      $userEmail = $user->getEmail();
      $userImg = $user->getAvatar();

      Session::put('token', $token);
      Session::put('userID', $userID);
      Session::put('userNickName', $userNickName);
      Session::put('userName', $userName);
      Session::put('userEmail', $userEmail);
      Session::put('userImg', $userImg);

      $count = DB::table('users')->where('email', '=', $userEmail)->count();
      if($count == 0){
        DB::table('users')->insert([
                              'name' => $userName,
                              'email' => $userEmail,
                              'user_id' => $userID,
                              'nick_name' => $userName
                              ]);
                return redirect('/dashboard');
      }else {
        return redirect('/dashboard');
      }
    }

    function Logout(Request $request){
      $request->session()->flush();
      return redirect('/');
    }

}
