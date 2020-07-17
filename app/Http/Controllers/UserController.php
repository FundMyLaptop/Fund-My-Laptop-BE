<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Favorite;
use Validator;
use App\BackAccount;
use App\Recommendation;
use View;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerification;

class UserController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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
    public function edit(Request $request, $id)
    {
        //
            $user = User::find($request->id);

            //return redirect()->route('/update-profile/{$id}')->with('user', $user);
            return View::make('update-profilepage')->with('user', $user);
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
        
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'email'      => 'required|email',
            'phone'      => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->route('update-profile')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $user = User::find('id');
            $user->phone       = $request->input('phone');
            $user->email      = $request->input('email');
            $user->address    = $request->input('address');
            $user->save();

            // redirect
            return back()->with('success','Profile Updated');
        }
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

    //user registration
     public function signUp(Request $request)
     {
         $credentials = $request->only('firstName','lastName','email', 'password');
 
         $rules = array(
             'email' => 'required|email|unique:users',
             'password' => 'required|confirmed',
             'password_confirmation' => 'required',
             'firstName' => 'required',
             'lastName' => 'required'
         );
 
         $validator = Validator::make($request->all(), $rules);
 
         if($validator->fails())
            {
                return Redirect::back()->withInput()->withErrors($validator);
            } else {
         $input['email'] = $request->get('email');
         $input['firstName'] = $request->get('firstName');
         $input['lastName'] = $request->get('lastName');
         $input['password'] = $request->get('password');
         $input['password'] = bcrypt($input['password']);
         $input['role'] = 'user';
         //send verification mail to user
         $verifyCode = '$2y$10$hO2Acl2tSRjFSv7Fw99gjOGrlOZpRH0HlpvRZbKKFHk1DbptU9k/G';
         $verifyLink = "http://fundmylaptop.com/verify/poiuytrewq?mnbvcxz=".$input['email']."&lkjhgfdsa=".$verifyCode;
         //send mail code starts
        $getMessagef = "<strong>Hi, ".$input['firstName']."<br><br>Kindly use the link below to verify your account<br><br>Link: ".$verifyLink."</strong>";

        $subject = "Verify your account FundMyLapTop";
        $userEmail = $input['email'];
        Mail::to($userEmail)->send(new UserVerification($getMessagef));
        
        if (Mail::failures()) {
        return redirect('/signup')->with('error', 'Failed to send verification email, Please try again!');   } else {
         //send mail code ends
         $saveData = User::create($input); 
        }
         if($saveData){
             return redirect('/signup')->with('status', 'Registration Successful, Please check your mail box for verification!');
           } else {
               return Redirect::back()
                 ->withErrors([
                     'credentials' => 'We cannot register you now; Please try again'
                 ]);
             }
          }        
     }

    // user login auth
    public function login(Request $request)
    {
      $credentials = $request->only('email', 'password');
      $rules = array(
            'email' => 'required|exists:users',
            'password' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
           {
             return Redirect::back()->withInput()->withErrors($validator);
           } else {
               if(Auth::attempt($credentials) && Auth::user()->email_verified_at !== NULL){
                    return redirect('/investee-dashboard')->with('status', 'Login Successful!');
            }
        else {
            if(Auth::attempt($credentials) && Auth::user()->email_verified_at == NULL){
                return Redirect::back()
                ->withErrors([
                    'credentials' => 'Email is not verified yet, please check your mail or spam folder!'
                ]); 
                }
              return Redirect::back()
                ->withErrors([
                    'credentials' => 'We were unable to sign you in.'
                ]);
            }
         }
    }
    // verify user account
    public function verifyAccount(Request $request, $id)
    {
        if(isset($id)){
            $token = '$2y$10$hO2Acl2tSRjFSv7Fw99gjOGrlOZpRH0HlpvRZbKKFHk1DbptU9k/G';
            $getToken = $request->get('lkjhgfdsa');
            if($id == 'poiuytrewq' && $token == $getToken) {
                $userEmail = $request->get('mnbvcxz');
                $findUser = User::whereEmail($userEmail)->firstOrFail();
                $findUser->email_verified_at = date('Y-m-d H:m:s', time());
                $findUser->save();
                return redirect('/login?zxcvbnm=lkjhgfdsa')->with('status', 'Account Verified, You can now Login!');
            } else {
                 return redirect('/login')->with('error', 'We could not verify your account, please contact Administrator!');
            }
        }
    }
}
