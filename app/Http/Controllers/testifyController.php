<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class testifyController extends Controller
{
    public function delete(Request $request)
    {      
        //return $request;
        //validate post request as sent from user
        //testimonial_id is to be sent to this controller
        $testimonial_id = request()->testimonial_id;
        //return $testimonial_id;
        //Check if user is authenticated
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            // Check if testimonial exist
            $testimonial = DB::delete("DELETE FROM testimonials WHERE id = ? AND user_id = ?", [$id], [$user_id]);
            if($testimonial){
            
                    return response()->json([
                        'message' => 'testimonial deleted successfully',]);
            }
                } else {
                    return response()->json([
                        'message' => 'testimonial could not be deleted'
                    ], 404);
                }
            }
}