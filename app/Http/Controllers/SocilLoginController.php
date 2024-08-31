<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\SocialLogin;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Session;
use Auth;
use Mail;
class SocilLoginController extends Controller
{
    public function toProvider($driver){
   return Socialite::driver($driver)->redirect();
    }
    public function handleCallback($driver){
        $user = Socialite::driver($driver)->user();
        $user_account = SocialLogin::where('provider',$driver)->where('provider_id',$user->getId())->first();
        if($user_account){
            Auth::login($user_account->user);
            Session::regenerate();
            $toEmail    =  $user->getEmail();
            $data       =   array(
                "title"=>"Welcome ",
               
            );
            Mail::to($toEmail)->send(new AuthMail($data));
            return redirect()->intended('dashboard');
           
           
        }
        $db_user=User::where('email',$user->getEmail())->first();
           if($db_user){
            SocialLogin::create([
                'provider'=>$driver,
                'provider_id'=>$user->getId(),
                'user_id'=>$db_user->id
            ]);
           }else{
            $db_user=User::create([
                'name'=>$user->getName(),
                'email'=>$user->getEmail(),
                'password'=>bcrypt(rand(1000,999))
            ]);
           }
           Auth::login($db_user);
            Session::regenerate();
            $toEmail    =  $user->getEmail();
            $data       =   array(
                "title"=>"Welcome ",
               
            );
            Mail::to($toEmail)->send(new AuthMail($data));
            return redirect()->intended('dashboard');
    }


}
