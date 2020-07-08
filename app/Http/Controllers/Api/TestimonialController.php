<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Testimonial as Testimonial;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index()
{
}


    public function userTestimonials($user_id)
    {
        //Admin fetch all a particular user testimonial
        if (Auth::check() && Auth::user()->role == 2) {
            $testimonials = Testimonial::table('testimonial')
                ->where('user_id', $user_id)
                ->get();
            return response()->json(['data' => $testimonials], 200);
        } else return response()->json(['data' => 'You do not have permission to perform this action']);
    }

    public function myTestimonials(){
        //Fetch logged in user testimonials
      if (Auth::check()){
        $user_id = Auth::id();
        $testimonials = Testimonial::table('testimonial')
            ->where('user_id', $user_id)
            ->get();
        return response()->json(['data' => $testimonials], 200);
    } else return response()->json(['message' => 'You need to be logged in perform this action']);

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
     * Store a newly created testimonial
     * Author - @Segun(segunibidokun@gmail.com)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'testimonial' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $input = $request->all();
        Testimonial::create($input);

        return response()->json(['status' => 'success','response' => 'Testimonial Added Successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fetch(Request $request)
    {
        //
        if (Auth::check() && Auth::user()->role == 2) {
            $fetch_testimonal = Testimonial::get();
            if($fetch_testimonal) {
                return response()->json([
                    'message' => 'Testimonials record retrieved',
                    'data' => $fetch_testimonal
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Failed to fetch testimonials.',
                    'data' => $fetch_testimonal
                ], 404);
            }

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
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($testimonial_id)
    {

        //Admin delete testimonial
        if (Auth::check() && Auth::user()->role == 2) {
            if(Testimonial::where('id', $testimonial_id)->exists()) {
                $testimonial = Testimonial::find($testimonial_id);
                $testimonial->delete();

                return response()->json([
                    "message" => "Testimonial successfully deleted"
                ], 202);
            } else {
                return response()->json([
                    "message" => "Testimonial doesn't exist"
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'You do not have permission to perform this action'
            ]);
        }
    }
}
