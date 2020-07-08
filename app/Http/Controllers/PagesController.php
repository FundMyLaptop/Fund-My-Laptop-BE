<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
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

    public function updateProfile()
    {
        $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMWUwODQzYTdiOTFkNzViM2E1MjVlNjkxMjc5MzU1MGYxN2Y0NTIyZDUxMWZlYTRkNmY2YjU2MDJjYzhiMTNkYmZlZTFmMDYwYjJkYTQxMWYiLCJpYXQiOjE1OTQyMjU1MDgsIm5iZiI6MTU5NDIyNTUwOCwiZXhwIjoxNjI1NzYxNTA4LCJzdWIiOiI1MDIiLCJzY29wZXMiOltdfQ.nlHagmumeQBY0_V65rIpsEa2V2iqLxa_rzWvViBh1vXnjey_kAD7fk_PG0_NwQFEGd6FSChFYVSQ1DBhtUMDCKrDZzob_WdbZMEq4bwYHEqV5_oo3PdMjYRTi0b3pRZCXMAim-7uWKrEBMKcdzcUwcJqEF8krKR2TuzJ0rqtzxfr6ZxKE8o8guLHrHAlTa7Z4Nv57EavnIBSbWzsOHJTKxAVFtymNpd-JX5_O2kbOE3vSa4oRHxf9qbYQ82lr-6vEOCdu7VD1UgG1bsJPCBMP6MQuk_FY-LKqQPVVYWf6TZp2oD7ttjPKZBNWIJG5iy967gDzlTrFZ0v_bKGs4qAz0PnuRVe3jZAmt58dJ7fK7DM0_5VMpVLwOw-o8aTKm0s03Lo7tRsN3egoUlKvIje-hbX2d5zc1r-GLJJW2lZu9twZCHk1rifPUokyJkAMyp1ey3tcjvPLhbPt_U3_TDBNcIExV9dYyZ62Uqejbth-1362OJwpuRhnbYf2xQQvut93R8f7an90HCF_uyX4Grlnci8V9wEtQalyopWACFBcHoLp7H_H-hFIPSqEGgyqftiyKtRiKaZQFDTKcrR1WlfgSEckgaz72pyQGA41Fw6dyiILa1xQfdH2jxpQi9MkRRX0MIoK7RSX39YignOBosasI0isfd10ep6d7RGvk-sSTY';
        $client = new Client(['base_uri' => 'https://api.fundmylaptop.com/']);  
        $response = $client->request('GET', 'api/v1/my-profile', ['headers' => ['Authorization' => $token]]); 
        $body = $response->getBody();
        $content =$body->getContents();
        $data = json_decode($content,TRUE);

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
