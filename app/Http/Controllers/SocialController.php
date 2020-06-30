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
            $getInfo = Socialite::driver($provider)->stateless()->user();
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
        if($user_id ){
            return $user_id;
        }elseif ($user_email){
            $update = User::query()->where('email',$getInfo->email)->update(['provider_id'=>$getInfo->id]);
            return $user_email;
        }else{
            $name = explode(" ",$getInfo->name);
            $firstname = $name[1];
            $lastname = $name[0];
            try{
                return User::create([
                    'firstName' => $firstname,
                    'lastName' => $lastname,
                    'email' => $getInfo->email,
                    'password' => null,
                    'phone' => null,
                    'address' => null,
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
