<?php

namespace App\Http\Controllers;

use App\Mail\ComplaintFormMail;
use App\Blog;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Request as FundRequest;
use App\User;
use App\Transaction;
use App\Repayment;
use App\Accrual;
use Illuminate\Support\Facades\Auth;




class PagesController extends Controller
{
    public function landingPage()
    {
        $oldRequests = FundRequest::where([
            ['isFunded', '0'],
            ['isSuspended', '0']
        ])->oldest()->take(3)->get();
        $featuredCampaigns = FundRequest::with('user')->where('isFeatured',1)->inRandomOrder()->limit(6)->get();
        return view('index')->with(['oldRequests' => $oldRequests])->with(['featuredCampaigns' => $featuredCampaigns]);
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

    public function about()
    {
        return view('about');
    }

    public function whyChooseUs()
    {
        return view('milestones');
    }

    public function profile()
    {
        $user = Auth::user()->id;
        $data = User::with('request', 'favorite', 'bank_account', 'recommendation')->where('id', $user)->first();
        if ($data) {
            return view('update-profilepage', compact('data'));
        } else {
            return response()->json(['message' => 'Could not the details of this user'], 400);
        }

    }

    public function payment($id)
    {
        if (isset($id)) {
            $request = FundRequest::whereId($id)->with('user')->firstOrFail();
            $userId = Auth::user()->id;
            $user = User::whereId($userId)->firstOrFail();
            $firstName = $user->firstName;
            $lastName = $user->lastName;
            $metadata = [
                'funder_id' => $user->id,
                'request_id' => $id,
                'requester_id' => $request->user->id
            ];
            return view('payment', compact('user', 'request', 'metadata'));
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
        $blogs = Blog::latest()->paginate(9);
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

        if (Auth::check() == True) {
            $user_id = Auth::user()->id;

            $user = User::find($user_id);
            $transactiontotal = array_sum(json_decode(Transaction::where([['user_id', $user_id], ['status', 'success']])->pluck('amount')));
            $requests = FundRequest::where([['isFunded', 0], ['isSuspended', 0], ['isActive', 1]])->get();

            $transactions = Transaction::with(['Request'])->where([['user_id', $user_id], ['status', 'success']])->get();
            $rate = 0;
            foreach ($transactions as $transaction) {
                $rate = $transaction->request->accrual->avg('rate') + $rate;
            }
            if (count($transactions) > 0)
                $intrestAverage = round($rate / count($transactions), 1);
            else {
                $intrestAverage = 0;
            }
            $repaymenttotal = 0;
            foreach ($transactions as  $transaction) {
                $repaymenttotal = array_sum(json_decode($transaction->request->repayment->pluck('amount_paid'))) + $repaymenttotal;
            }

            return view('investor-dashboard')->with(compact('transactiontotal', 'user', 'repaymenttotal', 'transactions', 'requests', 'intrestAverage'));
        } else {
            return redirect(url('login'));
        }
    }

    public function successPage()
    {
        return view('signup-success');
    }
    // the homepage
    public function investeeDashboard()
    {
        // check if profile is completed
        if (Auth::user()->phone == "" || Auth::user()->address == "") {
            return view('investee-dashboard')->with('danger', 'Profile update is not complete yet');
        } else
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
        $token = 'Bearer ' . Auth::user()->token();
        $client = new Client(['base_uri' => 'fundmylaptop.com/']);
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

    // redundant code
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

    public function lend()

    {  
     
  
    }

}
