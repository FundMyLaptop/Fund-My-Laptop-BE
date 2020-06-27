<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Request as FundRequest;
use Illuminate\Http\Request;

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
        //return "got here";
        //$postdata = $request->post('title');

        //print_r($request->input('title'));
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
            //User::findOrFail($userid);

            $fundreq = new FundRequest();
            $fundreq->userId = htmlspecialchars($userid); //$request->input('userId') ?? "";
            $fundreq->title = htmlspecialchars($title); //$request->input('title') ?? "";
            $fundreq->description = htmlspecialchars($description); //$request->input('description') ?? "";
            $fundreq->photoURL = htmlspecialchars($photoURL); //$request->input('photoURL') ?? "";
            $fundreq->currency = htmlspecialchars($currency); //$request->input('currency') ?? "";
            $fundreq->amount = htmlspecialchars($amount); //$request->input('amount') ?? "";
            $fundreq->isFunded = htmlspecialchars($isFunded); //$request->input('isFunded') ?? "";
            $fundreq->isSuspended = htmlspecialchars($isSuspended); //$request->input('isSuspended') ?? "";
            $fundreq->isActive = htmlspecialchars($isActive); //$request->input('isActive') ?? "";
            //dd($fundreq);
            $save = $fundreq->save();

            if ($save == 1)
            {
                $message = [
                    'status' => 'success',
                    'data' => [
                        'message' => 'Request save successfully.',
                    ],
                ];
                return $message;
            } else
            {
                $message = [
                    'status' => 'failure',
                    'data' => [
                        'message' => 'Request cannot be saved. Contact administrator',
                    ],
                ];
                return $message;
            }

        } catch (Exception $ex) {
            //return back()->withError("User does not exist" . $userid)->withInput();
            return back()->withError($ex->getmessage())->withInput();
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
