<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Favorite::where('id', $id)->exists()) {
            $favoritesToDelete = Favorite::find($id);
            $favoritesToDelete->delete();
    
            return response()->json([
                "message" => "Favorite successfully deleted"
            ], 200);
        } else {
            return response()->json([
            "message" => "Favorite is neither found nor marked by you"
            ], 404);
          }
        }
    
    public function userFavoriteRequest($userId)
    {
        //Fetching all requests marked as favorite controller
        //Auth() checks to enable only autheticated users only have access to endpoint
        if(Auth::check()){
            if(Favorite::where('user_id', $userId)->exists()) {
                $favorites = Favorite::where('user_id', $userId)->with('request')->get();
                return response()->json([
                    "message" => "Favorite requests retrived",
                    "data" => $favorites
                ], 200);
            } else {
                return response()->json([
                "message" => "Request not Found or Marked as Favorite"
                ], 404);
              }
            }
        //Returns 401 error for non Authenticated users  
        else {
            return response()->json([
            "error" => "Unauthorized"
            ], 401);
            }
        }
}
