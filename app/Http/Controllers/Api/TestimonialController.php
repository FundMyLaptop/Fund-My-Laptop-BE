<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
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
        $user_id = Auth::user()->id;
        $testimonials = Testimonial::table('testimonial')
            ->where('user_id', $user_id)
            ->get();
        return response()->json(['data' => $testimonials], 200);
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
    public function deleteTestimonial($testimonial_id)
    {

        //Admin delete testimonial
        if (Auth::check() && Auth::user()->role == 2) {
            if (Testimonial::where('id', $testimonial_id)->exists()) {
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
