<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BankAccount;
use Illuminate\Support\Facades\Auth;

class BankAccountController extends Controller
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
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $account_data = request()->validate([
            'bank_name' => 'required',
            'account_name' => 'required',
            'account_number' => 'required'
        ]);

        $id = $user = Auth::user()->id;
        $bank_details_exist = BankAccount::query()->where('user_id', $id)->exists();
        if ($bank_details_exist) {
            // Update bank account information record
            if (BankAccount::query()->where('user_id', $id)->update($account_data)) {

                return response()->json([
                    'message' => 'Bank account information updated successfully',
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Bank account information could not be updated'
                ], 401);
            }
        } else {
            // Create bank account information record
            if (BankAccount::query()->create($account_data)) {

                return response()->json([
                    'message' => 'Bank account information uploaded successfully',
                ], 201);
            } else {
                return response()->json([
                    'message' => 'Bank account information upload failed'
                ], 401);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
