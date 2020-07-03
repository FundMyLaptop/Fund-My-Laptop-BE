<?php

namespace App\Http\Controllers\Api;

use App\Favorite;
use App\BackAccount;
use App\Recommendation;
use Validator;
use Illuminate\Http\Request;
use App\Request as FundRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;

class UserController extends Controller
{

    use VerifiesEmails;
    public $successStatus = 200;
    //private variable to store user
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        //fetch all users.
        //$= users = $this->user->all();//
        $users = User::with('request', 'favorite', 'recommendation', 'bank_account')->get();

        if ($users) {
            return response()->json([
                'message' => 'All users retrieved.',
                'data' => $users
            ], 200);
        } else {
            return response()->json([
                'message' => 'Failed to fetch users.',
                'data' => $users
            ], 404);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $token = $user->createToken('FundMyLaptop')->accessToken;
            if ($user->email_verified_at !== NULL) {
                return response()->json(
                    [
                        'status' => 'success',
                        'token' => $token,
                        'email verification status' => 'Email verified.',
                        'data' => $user,
                    ],
                    200
                );
            } else {
                return response()->json(
                    [
                        'status' => 'success',
                        'token' => $token,
                        'email verification status' => 'Email not verified. Please verify your email.', 
                        'data' => $user
                    ],
                    200
                );
            }
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_again' => 'required|same:password',
            'phone' => 'required|unique:users',
            'address' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        # Exclude The Password Again field from going to db
        $request->offsetUnset('password_again');

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);
        $user->sendEmailVerificationNotification();
        $token =  $user->createToken('FundMyLaptop')->accessToken;
        return response()->json(
            [
                'status' => 'success',
                'response' => 'Account Created Successfully. Please check your inbox and confirm your email address.',
                'token' => $token,
                'data' => array(
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                ),
                'user_id' => $user->id
            ],
            201
        );
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 201);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response()->json([
            'status' => true,
            'message' => 'Logged User Out'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMyProfile()
    {
        $user = Auth::user()->id;

        $userDetails = User::with('request', 'favorite', 'bank_account', 'recommendation')->where('id', $user)->first();
        if ($userDetails) {
            return response()->json(['message' => $userDetails], 201);
        } else {
            return response()->json(['message' => 'Could not the details of this user'], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
