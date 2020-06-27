<?php

namespace App\Http\Controllers;

use App\Request as FundRequest;
use Exception;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    //

    public function insert(Request $request)
    {

        //$postdata = $request->post('title');

        //print_r($request->input('title'));
        try {
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

            if ($save == 1) {
                $message = [
                    'status' => 'success',
                    'data' => [
                        'message' => 'Request save successfully.',
                    ],
                ];
                return $message;
            } else {
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
}
