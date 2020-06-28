<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Request as FundRequest;
use Illuminate\Http\Request;
use App\User;

class RequestController extends Controller
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
        try
        {
            $userid = $request->post('userId') ?? "";
            $title = $request->post('title') ?? "";
            $description = $request->post('description') ?? "";
            $photoURL = $request->post('photoURL') ?? "";
            $currency = $request->post('currency') ?? "";
            $amount = $request->post('amount') ?? "";
            $isFunded = $request->post('isFunded') ?? "";
            $isSuspended = $request->post('isSuspended') ?? "";
            $isActive = $request->post('isActive') ?? "";



            //check if user exit
            $user = User::find($userid);
            if($user == ""){
                return response()->json(['message' => 'User does not exist'], 404);
            }
            if($amount < 0)
            {
                return response()->json(['message' => 'Amount cannot be less than zero'], 304);
            }
            /*if(substr($photoURL,0,7) != 'http://' || substr($photoURL,0,8) != 'https://')
            {
                $photoURL .= 'http://';
                return response()->json(['messae' => 'Amount cannot be less than zero'], 304);
            } */

            $fundreq = new FundRequest();
            $fundreq->userId = htmlspecialchars($userid);
            $fundreq->title = htmlspecialchars($title);
            $fundreq->description = htmlspecialchars($description);
            $fundreq->photoURL = htmlspecialchars($photoURL);
            $fundreq->currency = htmlspecialchars($currency);
            $fundreq->amount = htmlspecialchars($amount);
            $fundreq->isFunded = htmlspecialchars($isFunded);
            $fundreq->isSuspended = htmlspecialchars($isSuspended);
            $fundreq->isActive = htmlspecialchars($isActive);

            $save = $fundreq->save();

            if ($save == 1)
            {
                return response()->json(['message' => 'Request save successfully'], 202);
                /*$message = [
                    'status' => 'success',
                    'data' => [
                        'message' => 'Request save successfully.',
                    ],
                ];
                return $message; */
            } else
            {
                return response()->json(['message' => 'Request cannot be saved. Contact administrator'], 202);
                /*
                $message = [
                    'status' => 'failure',
                    'data' => [
                        'message' => 'Request cannot be saved. Contact administrator',
                    ],
                ];
                return $message; */
            }

        } catch (Exception $ex) {
            return response()->json(['message' => back()->withError($ex->getmessage())->withInput()], 202);
            //return back()->withError($ex->getmessage())->withInput();
        }

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
