<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Verification;
class FundeeVerificationController extends Controller
{
  public function userVerified($id) {
      $userExist = User::find($id);
      //dd($userExist);
      if($userExist) {
          if($userExist->userExist) {
              $verificationRecord = Verification::find($userExist->s->id);
              dd($verificationRecord);
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

}
