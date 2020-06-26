<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request as TransactionRequest;
use App\Http\Controllers\Controller;
use App\Transaction;
use Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
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
     * @param TransactionRequest $request
     * @return JsonResponse
     */
    public function store(TransactionRequest $request)
    {
        $validator = Validator::make($request->all(),
            [
                'request_id' => 'required|int',
                'transaction_ref' => 'required',
                'amount' => 'required|numeric',
                'status' => 'required',
                'response_code' => 'required|int',
            ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);}
        $transaction =  new Transaction();
        $transaction->request_id = $request->request_id;
        $transaction->transaction_ref = $request->transaction_ref;
        $transaction->amount = $request->amount;
        $transaction->status= $request->status;
        $transaction->response_code = $request->response_code;
            $transaction->save();
        return response()->json([
                "message" => "transaction record created"
            ], 201);

        }

        //

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
     * @param TransactionRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionRequest $request, $id)
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
