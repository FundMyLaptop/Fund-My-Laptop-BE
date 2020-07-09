<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Blog as Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * Author : https://github.com/oyedotunsodiq045
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Who can read all Blog post
        // an authenticated users should be able to view all blog post
        // 9 queries are returned per pages
        $user = Auth::user();
        $query = Blog::with('user')->paginate(9);

        return response()->json([
            'message' => 'Blogs retrieved',
            'data' => $query
        ], 200);
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
     * Author : https://github.com/oyedotunsodiq045
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Who creates the blog post
        // Only Admin creates a blog post
        if (Auth::check() && Auth::user()->role == 2) {
            $user_id = Auth::user()->id;
            $validator = Validator::make($request->all(),
                [
                    'title' => 'required',
                    'category' => 'required',
                    'image' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
                    'post' => 'required',
                ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'fill in all fields',
                    'data' => $validate->errors()
                ]);
            }
    
            $blog = new Blog();
            $blog->user_id = $user_id;
            $blog->title = $request->title;
            $blog->category = $request->category;
            $blog->image = $request->file('image')->store('uploads/images', 'public');
            $blog->post = $request->post;
            $blog->save();
            return response()->json(['message' => 'Blog post created'], 201);
        } else {
            return response()->json([
                'message' => 'You do not have permission to perform this action'
            ]);
        }
    }

    /**
     * Display the specified resource.
     * Author : https://github.com/oyedotunsodiq045
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Who can read a Blog post
        // an authenticated user should be able to view a blog post
        // https://stackoverflow.com/questions/33483532/which-to-use-authcheck-or-authuser-laravel-5-1
        // Auth::user() and Auth::check() - Both makes DB calls while 
        // for more speed we can check if user is authenticated via $user == null;
        $user = Auth::user();
        // if (Auth::check()) {
        if ($user !== null) {
          $request = Blog::where('id', $id)->with('user')->get();
          return response()->json([
              'message' => 'Blog post retrieved',
              'data' => $request
          ], 200); 
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
     * Author : https://github.com/oyedotunsodiq045
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Who deletes a blog post
        // Only Admin deletes blog post
        if (Auth::check() && Auth::user()->role == 2) {
            if(Blog::where('id', $id)->exists()) {
                $blog = Blog::find($id);
                $blog->delete();

                return response()->json([
                    "message" => "Blog post successfully deleted"
                ], 202);
            } else {
                return response()->json([
                    "message" => "Blog not found"
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'You do not have permission to perform this action'
            ]);
        }
    }
}
