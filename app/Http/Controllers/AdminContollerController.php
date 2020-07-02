<?php

namespace App\Http\Controllers;

use App\AdminContoller;
use Illuminate\Http\Request;

class AdminContollerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check if user is Admin
        
        if (Auth::check() && Auth::user()->role == 2) {

            // Fetch completed requests

            $completed_requests = DB::table('users')->where('isFunded', '=', 1)->get();

        // Count completed requests

            $count_completed = count($completed_requests);
            return response()->json([
                'message' => 'Completed requests fetched successfully',
                'completed_requests' => $completed_requests,
                'count_completed' => $count_completed], 200);
        } else {
            return response()->json([
                'message' => 'Requested resource could be fetched'
            ], 200);
        }
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
     * @param  \App\AdminContoller  $adminContoller
     * @return \Illuminate\Http\Response
     */
    public function show(AdminContoller $adminContoller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminContoller  $adminContoller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminContoller $adminContoller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminContoller  $adminContoller
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminContoller $adminContoller)
    {
        //
    }
}
