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
    public function index()
    {
        //
        // only admin can view verified accounts
        if (Auth::check() && Auth::user()->role == 2) {

            $verified = Verification::with('user')->where('status',1)->get();
            return response()->json(['data' => $verified], 200);
        }
        else{
            return response()->json(['data' => 'You do not have permission'], 200);
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

     //verify bvn 
    public function verifyBvn(Request $request){

    $FirstName = $request->FirstName;
    $LastName = $request->LastName;
    $curl = curl_init();

     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

     curl_setopt_array($curl, array(
       CURLOPT_URL => "https://sandbox.wallets.africa/self/verifybvn",
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_ENCODING => "",
       CURLOPT_MAXREDIRS => 10,
       CURLOPT_TIMEOUT => 0,
       CURLOPT_FOLLOWLOCATION => true,
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => "POST",
       CURLOPT_POSTFIELDS => json_encode([
         
         'bvn'=> $request->bvn,
         'dateOfBirth'=> $request->dateOfBirth,
         'secretKey'=> 'hfucj5jatq8h',
         
       ]),
      
       CURLOPT_HTTPHEADER => array(
         "Content-Type: application/json",
         "Authorization: Bearer uvjqzm5xl6bw"
       ),
     ));
     
     $response = curl_exec($curl);
     $err = curl_error($curl);
     curl_close($curl);

     $resp = json_decode($response, true);

    $FirstNameFromBvn = $resp['FirstName'];
    $LastNameFromBvn = $resp['LastName'];

    if(($FirstName == $FirstNameFromBvn) && ($LastName == $LastNameFromBvn)){
        return response()->json(['message' => 'Firstname and Lastname match BVN information'], 201);
    } else{
        return response()->json([
            'message' => 'Firstname and Lastname do not match BVN information'], 404);
    }
     }
     
    public function store(Request $request)
    {
        //Upload user id or video and verify their account
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
