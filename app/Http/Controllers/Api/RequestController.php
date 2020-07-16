<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Request as FundRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Auth\Middleware\Authenticate;
use Validator;

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
        $query = FundRequest::with('user')->paginate(30);

        return response()->json([
            'message' => 'Requests retrieved',
            'data' => $query
        ], 200);
    }

    /**
     * Display a listing of the unattended fundees requests.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function availableFundingRequest()
    {
        $unattendedFundingRequest = FundRequest::with('user')->where('isFunded', 0)->get();

        return response()->json([
            'message' => 'Unattended Requests Retrieved',
            'data' => $unattendedFundingRequest
        ], 200);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'title' => 'required',
                    'description' => 'required',
                    'photoURL' => 'required',
                    'currency' => 'required',
                    'amount' => 'required',
                ]
            );
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $title = $request->title ?? "";
            $description = $request->description ?? "";
            $photoURL = $request->photoURL ?? "";
            $currency = $request->currency ?? "";
            $amount = $request->amount ?? "";
            $isFunded = 0;
            $isSuspended = 0;
            $isActive = 0;

            //get authenticated user id
            $userid = Auth::id();


            //if (!Auth::check()) {
            // The user is logged in...
            //    return response()->json(['message' => 'User does not exist'], 404);
            //}
            if ($amount < 0) {
                return response()->json(['message' => 'Amount cannot be less than zero'], 304);
            }
            /*if(substr($photoURL,0,7) != 'http://' || substr($photoURL,0,8) != 'https://')
            {
                $photoURL .= 'http://';
                return response()->json(['messae' => 'Amount cannot be less than zero'], 304);
            } */

            $fundreq = new FundRequest();
            $fundreq->user_id = htmlspecialchars($userid);
            $fundreq->title = htmlspecialchars($title);
            $fundreq->description = htmlspecialchars($description);
            $fundreq->photoURL = htmlspecialchars($photoURL);
            $fundreq->currency = htmlspecialchars($currency);
            $fundreq->amount = htmlspecialchars($amount);
            $fundreq->isFunded = htmlspecialchars($isFunded);
            $fundreq->isSuspended = htmlspecialchars($isSuspended);
            $fundreq->isActive = htmlspecialchars($isActive);

            $save = $fundreq->save();


            if ($save) {
                return response()->json(['message' => 'Request save successfully'], 200);
            } else {
                return response()->json(['message' => 'Request could not saved. Contact administrator'], 405);
            }
        } catch (\Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], 406);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = Auth::user();
        if (Auth::check() && Auth::user()->role == 2) {
          $request = FundRequest::where('id', $id)->with('user')->get();
          return response()->json([

              'message' => 'Request retrieved',
              'data' => $request
          ], 200); 
        }
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
        //destroy method 
        if (Auth::check() && Auth::user()->role == 2) {
           if(FundRequest::where('id', $id)->exists()) {
               $fundRequest = FundRequest::find($id);
               $fundRequest->delete();
               return response()->json([
                  "message" => "Request deleted"
               ], 202);
            } else {
               return response()->json([
                  "message" => "Request doesn't exist"
               ], 404);
            }
         } else {
            return response()->json([
               'message' => 'You do not have permission to perform this action'
            ]);
         }
    }

    public function deleteMyRequest($id)
    //request owner can delete request
   {
      $userId = Auth::user()->id;
      $fundRequest = FundRequest::where('id', $id)->first();
      if ($userId == $fundRequest->user_id) {
          $fundRequest = FundRequest::find($id);
          $fundRequest->delete();
          return response()->json([
              "message" => "Request deleted"
          ], 202);
      } else {
          return response()->json([
              "message" => "You do not have access to delete this request"
          ], 200);
      }
   }

    public function fetch_uncompleted_requests(Request $request)
    {
        $request = FundRequest::where('isActive', 1)->where('isSuspended', 0)->where('isFunded', 0)->get();
        $count = FundRequest::where('isActive', 1)->where('isSuspended', 0)->where('isFunded', 0)->count();
        return response()->json([
            'message' => 'Request retrieved',
            'count' => $count,
            'data' => $request
        ], 200);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param FeaturedRequest $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function set_featured(Request $request, $id)
    {
        //
        if (Auth::check() && Auth::user()->role == 2) {
            $featured_exist = FundRequest::query()->where('id',$id)->exists();
            if($featured_exist){

                $update = FundRequest::query()->where('id',$id)->update([
                'isFeatured'=>'1',
                ]);
                if($update){
                    return response()->json(['message'=> 'request feature updated'],201);
                }else{
                    return response()->json(['message'=> 'unable to update the reqyest feature'],400);
                }
            }else{
                return response()->json(['message'=> 'Request does not exist '],400);
            }
        }
    }

    public function fetch_featured_requests(Request $request)
    {
        //
        if (Auth::check() && Auth::user()->role == 2) {
            $request = FundRequest::where('isFeatured', 1)->get();
            return response()->json([
                'message' => 'Request retrieved',
                'data' => $request
            ], 200);
        }
    }

    public function view_particular_request($id)
    {
    
        if (Auth::check()) {
            if(FundRequest::where('id', $id)->exists()) {
                $FundRequest = FundRequest::find($id);
                return response()->json([
                    "message" => "Request retrieved",
                    "data" => $FundRequest
                ], 200);
            } else {
                return response()->json([
                    "message" => "Request doesn't exist"
                ], 404);
            }
                
        }
    }
}
