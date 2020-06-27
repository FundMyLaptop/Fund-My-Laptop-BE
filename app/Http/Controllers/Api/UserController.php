<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Validator;
>>>>>>> 4c78ec036fcfbca417cb8ac6b3a136a5d542b4b4

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
    }

    public function verified()
    {
        if(Auth::user())
        $users = DB::table('users')
                ->whereNotNull("email_verified_at")
                ->select('firstname', 'lastname','email','id')
                ->get();
         return json_encode($users);
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

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $token = $user->createToken('FundMyLaptop')->accessToken;
            return response()->json(
                [
                    'status' => 'success',
                    'token' => $token,
                    'data' => $user
                ],
                200
            );
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
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
            return response()->json(['error'=>$validator->errors()], 401);
        }

        # Exclude The Password Again field from going to db
        $request->offsetUnset('password_again');

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);
        $token =  $user->createToken('FundMyLaptop')->accessToken;
        return response()->json(
            [
                'status' => 'success',
                'response' => 'Account Created Successfully',
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
            200
        );
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Admin can view all verified account
        // $verified = DB::table('users')
        //             ->whereNotNull('email_verified_at')
        //             ->get();

        //  return json_encode($verified);


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
