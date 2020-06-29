<?php

namespace App\Http\Controllers\Api;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Verification;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($id)
    {
      $userExist = User::find($id);
        //dd($userExist);
        if($userExist) {
            if($userExist->userExist) {
                $verificationRecord = Verification::find($userExist->userExist->id);
                // start of code to save files in storage directory
                /*
                 * way 1
                 * this method will when you call it by sending user id as parameter & you have record for that user in table.
                 */
                $photo_url = $verificationRecord->photoURL; // getting url of image from table
//dd($photo_url);
                //$photo_url = "https://media.gettyimages.com/photos/wazir-khan-mosque-lahore-punjab-pakistan-picture-id637623678";
                $content = file_get_contents($photo_url);
                $a = file_put_contents(storage_path('app/public/').rand(1000,3000).'.jpg', $content);

                /*
                 * way 2
                 * this will work when you put this code inside function where form data is being submited to save in verification table [database]
                 */
                //$this->verifyAndStoreImage(\request(),'photoURL',storage_path('app/public/'));
                // end file saving in storage directory
                Verification::findOrFail($verificationRecord->id)->update([
                    'status' => 1,
                ]);

            }
            else {
                return redirect()->back()->with('error','verification record not found.');
            }
        }
        else {
            return redirect()->back()->with('error','this user is not in our record.');
        }
    }

    /**
     * Does very basic image validity checking and stores it. Redirects back if somethings wrong.
     * @Notice: This is not an alternative to the model validation for this field.
     *
     * @param Request $request
     * @return $this|false|string
     */
    public  function verifyAndStoreImage(Request $request, $fieldname = 'picture', $directory = 'unknown')
    {
        if ($request->hasFile($fieldname)) {
            $directory  = storage_path('app/public/');
            if (!$request->file($fieldname)->isValid()) {
                session()->flash('error', 'Invalid File!');
                return redirect()->back()->withInput();
            }
            $destinationPath = $directory;

            $file = $request->$fieldname ;
            $extension = $file->getClientOriginalExtension();
            $fileName = uniqid(). '.' . $extension;
            $file->move($destinationPath, $fileName);

            return $fileName;
        }
        return null;
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
