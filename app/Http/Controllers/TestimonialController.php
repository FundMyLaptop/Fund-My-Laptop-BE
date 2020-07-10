<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        //
        //get count of testimonials
        //$testimonial= Testimonial::get();

        if (Auth::check() && Auth::user()->role == 2)
        {
            $row_count = DB::table($tableName)
                     ->select(DB::raw('count(*) as count'))
                     ->count;

            $testimonial_id = rand(1,$row_count);

            if(Testimonial::where('id', $testimonial_id)->exists())
            {
                $testimonial = Testimonial::find($testimonial_id);
                return view('testimonial',['testimonial'=> $testimonial]);

            }
            else
            {
                return view('testimonial',['testimonial'=> 'No testimonial']);
            }
        } else
        {
            return view('testimonial',['testimonial'=> 'You do not have access to view this page']);
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
