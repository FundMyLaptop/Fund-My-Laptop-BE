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
        /*{{-- Pleading for fund title --}}*/

        $data['linkone'] = 'Home';
        $data['linktwo'] = 'Campage Page';
        $data['linkthree'] = 'Campaign';
        $data['plead'] = 'Fund John Doe’s Laptop Purchase';
        $data['video'] = 'Your browser does not support the video tag.';
        $data['detail'] = 'Posted by:';
        $data['subdetail'] = 'John Doe';
        $data['laptopdetail'] = 'Posted on:';
        $data['laptopsubdetail'] = '12/12/2020';
        $data['where'] = 'Location:';
        $data['region'] = 'Lagos, Nigeria';
        $data['work'] = 'Occupation';
        $data['mode'] = 'Freelance Software Developer';

        /*{{-- Description --}}*/

        $data['description'] = 'Description';
        $data['deescribed'] = ' I run a small freelancing business in the heart of Lagos. My former
                                laptop finally packed up after several attempts at refurbishing it,
                                I would like a loan to get a new laptop to continue my business. My
                                business loremipsum.com generates enough money to repay the loan in
                                three months. I would really appreciate funding for this campaign.
                                Thank you for your time 🙂.';

        /*{{-- Recomendations --}}*/

        $data['recommend'] = 'Recommended by:';
        $data['numrecommend'] = '11 successsful recommendations';
        $data['numrecommendtwo'] = '7 successsful recommendations';
        $data['subdetailtwo'] = 'Uncle Doe';
        $data ['subrecommendthree'] = '6 successsful recommendations';
        $data ['view'] = 'View recommender details';
        $data['loan'] = 'Loan amount:';
        $data['fund'] = 'N 250,000';
        $data['proposed'] = 'Proposed Repayment period:';
        $data ['when'] = '3 months';

        /*{{-- Acknowledgement and support --}}*/

        $data['repayment'] = 'N 275,000';
        $data['agreement'] = 'Get a';
        $data['paying'] = 'repayment in 3 months if you fund
        this loan';
        $data['fundlink'] = 'Fund this loan';
        $data['gettingfund'] = 'Can’t fund? Want to help? Share this campaign on social media';

        return view('campaign', $data);
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
