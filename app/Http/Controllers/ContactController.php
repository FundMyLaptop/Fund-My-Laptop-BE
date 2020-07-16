<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'email|required',
            'phone' => 'numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());

        return back()->with('success', 'Thanks for reaching out, we will respond shortly');
    }
}
