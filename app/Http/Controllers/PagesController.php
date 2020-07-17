<?php

namespace App\Http\Controllers;

use App\Mail\ComplaintFormMail;
use App\Blog;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Request as FundRequest;
use App\User;



class PagesController extends Controller
{
    public function landingPage()
    {
        $oldRequests = FundRequest::where([
            ['isFunded', '0'],
            ['isSuspended', '0']
        ])->oldest()->take(3)->get();

        $allRequests = FundRequest::paginate(15);

        return view('index',compact('oldRequests','allRequests'));
    }

    public function request($id){
        $request = FundRequest::find($id);
        //dd($request);
        return view('details',compact('request'));
    }

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

    public function blogRead($id)
    {

        $blog = Blog::find($id);
        if (!$blog) {
            return view('404');
        }

        return view('blog-read')->with('blog', $blog);
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

    public function complaintForm(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = [
                'name' => 'required|min:5',
                'email' => 'required|email',
                'message' => 'required|min:10'
            ];

            if (!$request->validate($data)) {
                return redirect()->back()->withInput($data);
            } else {
                $complaint_data = $request->all();
                Mail::to('')->send(new ComplaintFormMail($complaint_data));

                return redirect('complaint-form')->with('status', 'Thanks for your message!. We will be in touch.');
            }
        }
        return view('complaint-form');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blogList()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('blog-list')->with('blogs', $blogs);
    }

    public function updateProfile()
    {
        $token = 'Bearer '.Auth::user()->token();
        $client = new Client(['base_uri' => 'https://api.fundmylaptop.com/']);
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
