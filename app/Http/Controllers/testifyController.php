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
            //$id = 1;
            $id = Auth::user()->id;
            
            // Check if testimonial exist
            $testimonial = DB::table('testimonials')->where('id', $testimonial_id)
                                                    ->where('user_id',$id)->count(); 
            if ($testimonial==0) {
                return response()->json([
                    'message' => 'testimonial do not exist',]);
            
            }else{
                        // delete testimonial
                        $testimonial = DB::table('testimonials')->where('id', $testimonial_id)
                                                                ->where('user_id',$id)->delete();          
                        if($testimonial){
                                //success response
                                return response()->json([
                                    'message' => 'testimonial deleted successfully',]);
                        } else {
                                // fail response
                                return response()->json([
                                    'message' => 'testimonial could not be deleted'
                                ], 404);
                            }
                }
        }
    }
}
