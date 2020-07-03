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

        if (Auth::check() && Auth::user()->role == 2) {

            // Fetch completed requests

            //$completed_requests = DB::table('requests')->where('isFunded', '=', 1)->get();
            $completed_requests = FundRequest::with('user')->where('isFunded', 1)->get();

            // Count completed requests

            $count_completed = count($completed_requests);
            return response()->json([
                'message' => 'Completed requests fetched successfully',
                'completed_requests' => $completed_requests,
                'count_completed' => $count_completed], 200);
        } else {
            return response()->json([
                'message' => 'Requested resource could not be fetched'
            ], 400);
        }
    }

    public function block(Request $request){
        if(Auth::check() && Auth::user()->role == 2)
        {
            if(User::where('id',$request->id)->exists()){
                $user = User::find($request->id);
                $user->isBlocked = 1;
                $user->blocked_until = $request->blocked_until;
                $user->save();

                return response()->json([
                "message"=>'User account blocked'
                ],202);
        }
        else
        {
            return response()->json([
                "message"=>"This user does not exist"
            ],404);
        }
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
