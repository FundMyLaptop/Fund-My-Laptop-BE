<?php

namespace App\Http\Controllers;

use App\Request as FundRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function fetch_featured_requests(Request $request)
    {

        if (Auth::check() && Auth::user()->role == 2) {
            $hey = FundRequest::with('user')->where('isFeatured', 0)->inRandomOrder()->limit(6)->get();
            return view('randomrequest', compact('hey'));
        } else {
            return redirect('/');
        }

    }

    public function availableFundingRequest()
    {
        $unattendedFundingRequests = FundRequest::IsNotFunded()->paginate(30);

        return view('unfunded-campaigns', compact('unattendedFundingRequests'));
    }

    /**
     * Get investee campaigns
     */
    public function investeeCampaigns()
    {
//        $user_id = Auth::id();
        $user_id = Auth::user()->id;
        $featured_requests = FundRequest::where('user_id', $user_id)->where('isActive', 1)->where('isSuspended', 0)->where('isFeatured', 1)->paginate(3);
        $campaign_requests = FundRequest::where('user_id', $user_id)->where('isActive', 1)->where('isSuspended', 0)->where('isFeatured', 0)->paginate(3);

        return view('investee-campaigns', compact('featured_requests', 'campaign_requests'));
    }


    /**
     * Manage investee campaign
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCampaign($id)
    {
//        $user_id = Auth::id();
        $user_id = Auth::user()->id;
        $campaign = FundRequest::findOrFail($id);
        //Get current user recent involvement
        $requests = FundRequest::with('transaction')
            ->where('user_id', $user_id)
            ->where('isFeatured', 1)
            //->where('isActive',1)
            ->get();
        //Get the count of funder donation to the current request
        $funder = Transaction::with('request')->where('request_id', $id)->count();
        //Get the count of user donation to requests
        $userDonation = Transaction::where([['user_id', $user_id], ['status', 'success']])->count();
        //Get the fundee real name from user table
        $fundee = User::where('id', $user_id)->first();
        //Get all funded and suspended and featured
        $pastcampaign = FundRequest::where('isActive', 0)->where('isFeatured', 0)->where('isFunded', 1)->orderBy('updated_at', 'desc')->paginate(5);
        //return view('manage-campaign', compact('campaign', 'requests', 'fundee', 'pastcampaign', 'funder', 'userDonation'));
        return view('manage-campaign', compact('campaign', 'requests', 'fundee', 'pastcampaign', 'funder', 'userDonation'));
    }


    /**
     * Investee create campaign form view
     */
    public function createCampaign()
    {
        return view('investee-create-campaign');
    }


    /**
     * Investee store campaign
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCampaign(Request $request){
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'description' => 'required',
                    'repaymentPeriod' => 'required',
                    'repaymentTimes' => 'required',
                    'photo_URL' => ['required', 'url'],
                    'currency' => '',
                    'amount' => 'required',
                ]
            );
            if ($validator->fails()) {
                return redirect('/campaigns/create')->withInput($request->input());
            }
            if ($request->amount < 1) {
                return redirect()->back()->with('create_error', 'Please enter a valid amount.');
            }
            // get authenticated user id
//        $user_id = Auth::id();
            $user_id = Auth::user()->id;
            $requestInfo = [
                'user_id' => $user_id,
                'title' => $request->title,
                'description' => $request->description,
                'photoURL' => $request->photo_URL,
                'repaymentPeriod' => $request->repaymentPeriod,
                'repaymentTimes' => $request->repaymentTimes,
                'currency' => 1,
                'amount' => $request->amount,
                'isFunded' => 0,
                'isSuspended' => 0,
                'isActive' => 1,
            ];

            if (FundRequest::create($requestInfo)) {
                return redirect()->back()->with('create_success', 'Campaign request created successfully.');
            } else {
                return redirect()->back()->with('create_error', 'Campaign request creation failed.');
            }
        } catch (\Exception $ex) {
            return redirect()->back()->with('create_error', 'Oops! something went wrong.');
        }

    }

    /**
     * Investee edit campaign form view
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editCampaign($id)
    {
        $edit_campaign = FundRequest::findOrFail($id);
        return view('investee-edit-campaign', compact('edit_campaign'));
    }

    /**
     * Investee update campaign
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateCampaign($id, Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'description' => 'required',
                    'photo_URL' => ['required', 'url'],
                    'repaymentPeriod' => 'required',
                    'repaymentTimes' => 'required',
                    'currency' => '',
                    'amount' => 'required',
                ]
            );

            if ($request->amount < 1) {
                return redirect()->back()->with('edit_error', 'Please enter a valid amount.');
            }

            if ($validator->fails()) {
                return redirect('/campaigns/edit/' . $id)->withErrors($validator);
            } else {
                // get authenticated user id
//        $user_id = Auth::id();
                $user_id = Auth::user()->id;
                //fetch the request id from database
                $update = FundRequest::findOrFail($id);
                if ($update->isActive == 1 && $update->isSuspended != 1) {
                    $requestUpdate = [
                        'user_id' => $user_id,
                        'title' => $request->title,
                        'description' => $request->description,
                        'repaymentPeriod' => $request->repaymentPeriod,
                        'repaymentTimes' => $request->repaymentTimes,
                        'photoURL' => $request->photo_URL,
                        'amount' => $request->amount,
                    ];
                    FundRequest::where('id', $id)->update($requestUpdate);
                    return redirect()->back()->with('edit_success', 'Campaign updated successfully.');
                } else {
                    return redirect()->back()->with('edit_error', 'This campaign is either suspended or inactive.');
                }
            }

        } catch (\Exception $ex) {
            return redirect()->back()->with('edit_error', 'Oops! something went wrong.');
        }
    }

    /**
     * Investee end a campaign
     * @param $id
     */
    public function suspendCampaign($id)
    {
        $campaign_exist = FundRequest::findOrFail($id);
        if ($campaign_exist->isSuspended == 1 && $campaign_exist->isActive == 0) {
            return redirect()->back()->with('suspend_error', 'Campaign marked as ended already.');
        } else {
            if ($campaign_exist) {
                FundRequest::where('id', $id)->update(array('isSuspended' => 1, 'isActive' => 0));
                return redirect()->back()->with('suspend_success', 'Campaign ended successfully.');
            } else {
                return redirect()->back()->with('suspend_error', 'Oops! something went wrong.');
            }
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
        $request = FundRequest::where('id', $id)->get();
        return view('campaign', compact('request'));
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
