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
        }catch (\Exception $exception){
            return response()->json(['error' => 'Unauthorized', 'message'=>$exception->getMessage()], 401);
    }

    }
    public function callback($provider)
    {
        try{
            if($provider == 'twitter'){
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
        return redirect()->to('/home');
    }catch (Exception $exception){
            return response()->json(['error' => 'Unauthorized', 'message'=>$exception->getMessage()], 401);
        }
    }
    function createUser($getInfo,$provider){
        try{
            $social = socialAccount::where(['provider_id' => $getInfo->id, 'provider_name' => $provider])->first();
            if($social){
                return $social->User;
            }else {
                if ($getInfo->email) {
                    $user = User::where('email', $getInfo->email)->first();
                    if ($user) {
                        $social = SocialAccount::create([
                            'user_id' => $user->id,
                            'provider_id' => $getInfo->id,
                            'provider_name' => $provider
                        ]);
                        return $user;
                    } else {
                        $user = User::create([
                            'email' => $getInfo->email,
                            'firstName' => $getInfo->name,
                            'role' => 0
                        ]);

                        SocialAccount::create([
                            'user_id' => $user->id,
                            'provider_name' => $provider,
                            'provider_id' => $getInfo->id,
                        ]);
                        return $user;
                    };
                } else {
                    $user = User::create([
                        'email' => $getInfo->email,
                        'firstName' => $getInfo->name,
                        'role' => 0
                    ]);

                    SocialAccount::create([
                        'user_id' => $user->id,
                        'provider_name' => $provider,
                        'provider_id' => $getInfo->id,
                    ]);
                    return $user;
                }
            }
            }catch (\Exception $e){
                throw new \Exception($e->getMessage());
            }
        }
    }
