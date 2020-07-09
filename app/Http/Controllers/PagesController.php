<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function payment()
    {
        return view('payment');
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

    public function blogRead($title)
    {


    
        $curl = curl_init();
        $title=urlencode($title);
        curl_setopt($curl,CURLOPT_URL,url('/api/v1/blog/'.$title));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl,CURLOPT_HEADER, false);

            $response = curl_exec($curl);
        
        
            curl_close($curl);
         
            $resp = json_decode($response, true);
           
        if(!$resp||isset($resp['message'])){
            return view('404');
        }
        return view('blog-read')->with('blog', $resp);
        
    }

    public function blog()
    {
        return view('blog');
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
        return view('update-profilepage');
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
