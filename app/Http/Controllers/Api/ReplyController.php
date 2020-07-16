<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CommentsController;
use App\reply;
use App\Comments;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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

        $user = Auth::user();
     $validator=Validator::make($request->all());

   if($validator->fails()){
     return response()->json($validator->messages(), 200);
 }
if (Auth::check() && Auth::user()->role == 2) {
        
 $reply = Reply::create([
          'name' =>$name,
          'reply' =>$request->reply,
          ]);


//dd($createComment);
 $comment = Comment::find($request->comment_id);
  if($reply){
    return response()->json(['reply'=>'saved'], 200);
  }else{
    return response()->json(['error'=>'Sorry an error occured while processing your reply.']);
  }}else{
  	return response()->json(['error'=>'Only admin can reply comments']);
  }
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
    	$user = Auth::user();
        if (Auth::check() && Auth::user()->role == 2) {
        
         $reply = $reply->find(request()->reply_id);
            $post = $reply->post;


        $deleted = $comment->delete();
        if ($deleted) {
            return response()->json(['status'=>'Deleted'], 200);
  }else{
    return response()->json(['error'=>'Sorry an error occured while deleting your reply.']);
  }}else{
            return response()->json(['error'=>'Only Admins can delete']);
        }


        //
    }
    
}
