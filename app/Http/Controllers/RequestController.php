<?php

namespace App\Http\Controllers;
use App\Request as FundRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    public function fetch_featured_requests(Request $request)
    {

        if (Auth::check() && Auth::user()->role == 2) {
        $hey = FundRequest::with('user')->where('isFeatured',0)->inRandomOrder()->limit(6)->get();
            return view('randomrequest', compact('hey'));
        }else{
            return redirect('/');
        }

    }



    public function availableFundingRequest()
    {
        $unattendedFundingRequests = FundRequest::IsNotFunded()->paginate(30);

        return view('unfunded-campaigns',compact('unattendedFundingRequests'));
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
        $request = FundRequest::where('id', $id)->get();
        return view('campaign', compact('request'));
         
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
