<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Request as FundRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Auth\Middleware\Authenticate;

class RequestController extends Controller
{
    public function __construct()
    {
        //allows only authenticated user
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $user = Auth::user();
        $query = FundRequest::with('user')->get();

        return response()->json([
            'message' => 'Requests retrieved',
            'data' => $query
        ], 201);
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

            $title = $request->title ?? "";
            $description = $request->description ?? "";
            $photoURL = $request->photoURL ?? "";
            $currency = $request->currency?? "";
            $amount = $request->amount ?? "";
            $isFunded = $request->isFunded ?? "";
            $isSuspended = $request->isSuspended ?? "";
            $isActive = $request->isActive ?? "";

            //get authenticated user id
            $userid = Auth::id;


            //if (!Auth::check()) {
                // The user is logged in...
            //    return response()->json(['message' => 'User does not exist'], 404);
            //}

            if($amount < 0)
            {
                return response()->json(['message' => 'Amount cannot be less than zero'], 304);
            }

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
                return response()->json(['message' => 'Request save successfully'], 200);

            } else
            {
                return response()->json([$submission,'message' => 'Request could not saved. Contact administrator'], 405);
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
            return response()->json(['message' => back()->withError($ex->getmessage())->withInput()], 406);
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
       $user = Auth::user();
          $request = FundRequest::where('id', $id)->with('user')->get();
            return response()->json([
                'message' => 'Request retrived',
                'data' => $request
            ], 200);

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
