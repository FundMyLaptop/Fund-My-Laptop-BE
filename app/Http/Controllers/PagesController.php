<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;

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

    public function blogRead()
    {
        return view('blog-read');
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

    public function login(Request $request)
    {
        if ($request->isMethod('post')){
            try {
                $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.fundmylaptop.com/api/']);
                //$cookieJar = new CookieJar();
                $inputs = [
                    'email' => $request->input('email', ''),
                    'password' => $request->input('password', ''),
                ];
                
                // dd($inputs);
                $response = $client->request('POST', 'login', [
                    'form_params' => $inputs
                    //'cookies' => $cookieJar
                ]);
                if ($response->getStatusCode() == 200) {
                    $data =  $response->getBody()->getContents();
                    $data = json_decode($response, TRUE);

                    return redirect()->route('dashboard', $data);
    
                    // echo '<pre>';
                    // print_r($data);
                } 
            } catch (\Exception $exception) {
                //return 'Caught exception: '. $exception->getMessage();
                return redirect()->route('error500Page');
            }
        }       
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
