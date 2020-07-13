<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Request as FundRequest;
use App\User;



class PagesController extends Controller
{
    public function termsAndConditions()
    {
        return view('terms-and-condition');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function campaign()
    {
        return view('campaign');
    }

    public function career()
    {
        return view('career');
    }

    public function album()
    {
        return view('album');
    }

    public function faq()
    {
        return view('faq');
    }

    public function payment($id)
    {
        if(isset($id)){
        $request = FundRequest::whereId($id)->firstOrFail();
         $userId = $request->user_id;
         $user = User::whereId($userId)->firstOrFail();
         $firstName = $user->firstName;
         $lastName = $user->lastName;

        return view('payment', compact('user', 'request'));
        }
    }

    public function benefit()
    {
        return view('benefits');
    }

    public function partners()
    {
        return view('partners');
    }

    public function howItWorks()
    {
        return view('how-it-works');
    }

    public function mileStones()
    {
        return view('milestones');
    }

    public function blogRead()
    {
        return view('blog-read');
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('blog', compact('blogs'));
    }

    public function error404Page()
    {
        return view('404');
    }
    public function error500Page()
    {
        return view('500');
    }

    public function investorDashboard()
    {
        return view('investor-dashboard');
    }

    public function investeeDashboard()
    {
        return view('investee-dashboard');
    }

    public function campaignGrossing()
    {
        return view('campaign-grossing');
    }

    public function complaint()
    {
        return view('complaint');
    }

    public function complaintForm()
    {
        return view('complaint-form');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogList()
    {
        return view('blog-list');
    }

    public function updateProfile()
    {
        // $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjBmM2Q0NzAyZjFmM2YwNzZhZmY0MGRhOGRjMzZlNGY1MzUxNzA0YzdmN2I0YTFiNjllZDAwNjljZjJiYzg1NjMzYjY2OGZmODg5YWYyYTAiLCJpYXQiOjE1OTQzNDE2MzUsIm5iZiI6MTU5NDM0MTYzNSwiZXhwIjoxNjI1ODc3NjM1LCJzdWIiOiI1MDIiLCJzY29wZXMiOltdfQ.dzVIVRC1icLI4G_zke-xWVbNg64ipR7sB1pSxwc7zwbqn8V6vMi2gfZH4v1wkLMjFlDV9o5gUm3Z45ulCy74PotPV5Q-U8CCN3JQRIvEMg7S-vpQUGE70_tInx8HjKaojdFGR545qnDMvlMp2YmKAGZt6NpcRy-OSffoxAGdZhY2A3ST0CGxUtTy4cQHhFnB_NHdKQYQRD8GUruG2_nVkiTVWSKHNl2IhWWLPdkcIpK5f9vy51u1e29HUfLi7T5_fO-rcg2QBJKAdDvlmOWmjTDYnETVgyU2Fk6jlHJ6k1JAlV7SLKQ2DiyYy5snb4Isajnw3xlx85FXxBQjrsAymYEKTsxRvycob6SOChwQYZh4ALeVbM40bZ8YndmtRSZrTw7cN2I33WzbREQUqSH0oNiRZ9L9RhJd4LuTgTftBUUag2ma0XwaegfLgXHJxQru-TmqZXihPH-j_qvWD16Mxgl3D0NboxgadHZqclYMVbLE7LI-DExtlOUGXXRmYINfhW73mHW4e9DFqZYN2jUqZ8FxrfHxr7giASm6M9IZTEBYxAMyI_pvvuJ_m1C4PNd4nP-AtPfrWgWMihpLdHKv8qqMOl3PhQI-B3HtZCl-JsvCD6i4faa9smASnxanPyH8Ki9W1y6svidC1Yn6VJKMu2zXyn_nS8LpaxxFFDMZxxE';
        $token = 'Bearer '.Auth::user()->token();
        $client = new Client(['base_uri' => 'https://www.fundmylaptop.com/']);
        $response = $client->request('GET', 'api/v1/my-profile', ['headers' => ['Authorization' => $token]]);
        $body = $response->getBody();
        $content = $body->getContents();
        $data = json_decode($content, TRUE);

        return view('update-profilepage', compact('data'));
    }

    public function signUp()
    {
        return view('signup');
    }

    public function sign_up()
    {
        return view('sign-Up');
    }

    public function login()
    {
        return view('login');
    }

    public function totalInvestment()
    {
        return view('investors_total_list_of_investments');
    }

    public function testModals()
    {
        return view('testmodals');
    }
}
