<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Verification;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($id)
    {
<<<<<<< HEAD

=======
        //
        // only admin can view verified accounts
        if (Auth::check() && Auth::user()->role == 2) {

            $verified = Verification::with('user')->where('status',1)->get();
            return response()->json(['data' => $verified], 200);
        }
        else{
            return response()->json(['data' => 'You do not have permission'], 200);
        }
>>>>>>> 6149de680f20639e917cb071527dde50b88c5065
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
      $data = $request-> validate([
      	'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
      	'video' => ['required', 'file', 'mimes:mp4', 'max:10048']
    	]);

    	$imageURL = $data['image']->store('uploads/images', 'public');
    	$videoURL = $data['video']->store('uploads/videos', 'public');
    	return auth()->user()->verification()->create([
    		'photoURL' => $imageURL,
    		'videoURL' => $videoURL,
    		'status' => 1
    	]);
      return response()->json([
        'message' => 'Verification Successful',
        'data' => $result
      ], 201);
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
        //
    }
}
