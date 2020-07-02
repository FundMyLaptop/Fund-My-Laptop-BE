<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Request as FundRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //Check if user is Admin

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
        //
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {

        //delete User account
        if (Auth::check() && Auth::user()->role == 2) {
            if(User::where('id', $id)->exists()) {
                $user = User::find($id);
                $user->delete();

                return response()->json([
                    "message" => "User account successfully deleted"
                ], 200);
            } else {
                return response()->json([
                    "message" => "User account not found"
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'You do not have permission to perform this action'
            ]);
        }
    }


     public function block($id)
    {
        // admin can block users
          if (Auth::check() && Auth::user()->role == 2) {
            if(User::where('id', $id)->exists()) {
                $user = User::find($id);
                $user-> banned = 1;
                $user->save();
                
                //
                //$user->banned_until();

        
                return response()->json([
                    "message" => "User account blocked"
                ], 202);
            } else {
                return response()->json([
                    "message" => "User account not found"
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'You do not have permission to perform this action'
            ]);
        }
        
    }

}
