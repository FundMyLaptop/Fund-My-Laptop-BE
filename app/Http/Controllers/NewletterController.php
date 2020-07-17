<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Newletter;
use Illuminate\Http\Request;

class NewletterController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
                    ]);
        Newletter::create($request->all());

        return back()->with('success', 'Thanks for Subscribing');
    }
}
