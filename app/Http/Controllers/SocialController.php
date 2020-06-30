<?php

namespace App\Http\Controllers;

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
        }catch (\Exception $exception){
            return response()->json(['error' => 'Unauthorized', 'message'=>$exception->getMessage()], 401);
    }

    }
    public function callback($provider)
    {
        try{
            if($provider !== 'twitter'){
                $getInfo = Socialite::driver($provider)->user();
            }else{
                $getInfo = Socialite::driver($provider)->stateless()->user();

            }
            $user = $this->createUser($getInfo,$provider);
            Auth::login($user);
            $user = Auth::user();
            $token = $user->createToken('FundMyLaptop')->accessToken;
            return response()->json(
                [
                    'status' => 'success',
                    'data' => $user,
                    'token' => $token
                ],
                200
            );
//            return redirect()->to('/home');
    }catch (Exception $exception){
            return response()->json(['error' => 'Unauthorized', 'message'=>$exception->getMessage()], 401);
        }
    }
    function createUser($getInfo,$provider){
        $user_id = User::where('provider_id', $getInfo->id)->first();
        if($getInfo->email){
            $user_email = User::where('email',$getInfo->email)->first();
        }else{
            $user_email = false;
        }
        if($user_email){
            return $user_email;
        }elseif ($user_id){
            return $user_id;
        }else{
            $name = explode(" ",$getInfo->name);
            switch ($provider){
                case "twitter":
                case "facebook":
                    $firstname = $name[1];
                    $lastname = $name[0];
                    break;
                case "linkedin":
                    $firstname = $name[0];
                    $lastname = $name[1];
                    break;
                default:
                    throw new \Exception('Unknown redirect ');
            };


            try{
                return User::create([
                    'firstName' => $firstname,
                    'lastName' => $lastname,
                    'email' => $getInfo->email,
                    'provider' => $provider,
                    'provider_id' => $getInfo->id,
                    'role' => 0,
                ]);
            }catch (\Exception $e){
                throw new \Exception($e->getMessage());
            }
        }

    }
}
