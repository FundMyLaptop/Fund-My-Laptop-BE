<?php

namespace App\Http\Controllers;

use App\SocialAccount;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PHPUnit\Exception;


class SocialController extends Controller
{
    //
    public function redirect($provider)
    {   try{
            return Socialite::driver($provider)->redirect();
        }catch (Exception $exception){
            return response()->json(['error' => 'Unauthorized', 'message'=>$exception->getMessage()], 401);
    }

    }
    public function callback($provider)
    {

        try{
            $getInfo = Socialite::driver($provider)->stateless()->user();
        }
        catch (Exception $exception){
            return redirect('/login');
        }
        $authuser = $this->findOrCreateUser($getInfo, $provider);

        Auth::login($authuser, true);
        return redirect('/investee-dashboard');
    }
    public function findOrCreateUser($getInfo,$provider){
        $social = socialAccount::where(['provider_id' => $getInfo->id, 'provider_name' => $provider])->first();
        if($social){
            return $social->user;
        }else{
            $user = User::where('email', $getInfo->email)->first();

            if(!$user) {
                $user = User::create([
                    'email' => $getInfo->getEmail(),
                    'firstName' => $getInfo->getName(),
                    'role' => 0
                ]);
            }

            $user->socialAccount()->create([
                'provider_name' => $provider,
                'provider_id' => $getInfo->id,
            ]);
            return $user;

    }
}
}