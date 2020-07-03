<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testimonialController extends Controller
{
    //
// app/Http/Controllers/Api/UserController.php
    public function delete_testimonial (Request $request)
    {      
        return $request;
        //validate post request as sent from user
        //testimonial_id is to be sent to this controller
        $this->validate($request, [
            'testimonial_id' => 'required'
        ]);

        $testimonial_id = $request()->testimonial_id;
        
        //Check if user is authenticated
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            // Check if testimonial exist
            $testimonial = DB::delete("DELETE FROM testimonial WHERE id = ? AND user_id = ?", [$id], [$user_id]);
            if($testimonial){
            
                    return response()->json([
                        'message' => 'testimonial deleted successfully',]);
            }
                } else {
                    return response()->json([
                        'message' => 'testimonial could not be fetched'
                    ], 404);
                }
            }
}
