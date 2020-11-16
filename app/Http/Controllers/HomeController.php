<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Partner;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->where('id',1)->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 2)->first();
        $cms_home2 = DB::table('pages')->where('id', 3)->first();
        $cms_home3 = DB::table('pages')->where('id', 4)->first();
        $cms_home4 = DB::table('pages')->where('id', 5)->first();
        $cms_home5 = DB::table('pages')->where('id', 6)->first();
        $cms_home6 = DB::table('pages')->where('id', 7)->first();
        $cms_home7 = DB::table('pages')->where('id', 8)->first();
        $cms_home8 = DB::table('pages')->where('id', 9)->first();
        $cms_home9 = DB::table('pages')->where('id', 10)->first();
        $cms_home10 = DB::table('pages')->where('id', 11)->first();
        $cms_home11 = DB::table('pages')->where('id', 12)->first();
        $cms_home12 = DB::table('pages')->where('id', 13)->first();
        $cms_home13 = DB::table('pages')->where('id', 14)->first();
        $cms_home14 = DB::table('pages')->where('id', 15)->first();

        $business= DB::table('business_insurances')->orderBy('id', 'ASC')->get()->take(3);

        $reviews= DB::table('testimonials')->get();

        return view('welcome', compact('banner', 'cms_home1', 'cms_home2', 'cms_home3', 'cms_home4', 'cms_home5', 'cms_home6', 'cms_home7', 'cms_home8', 'cms_home9', 'cms_home10', 'cms_home11', 'cms_home12', 'cms_home13', 'cms_home14', 'business', 'reviews'));
    }

    public function about()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',1)->first();

        $cms_about1= DB::table('pages')->where('id',16)->first();
        $cms_about2= DB::table('pages')->where('id',17)->first();
        $cms_about3= DB::table('pages')->where('id',18)->first();
        $cms_about4= DB::table('pages')->where('id',19)->first();
        $cms_about5= DB::table('pages')->where('id',20)->first();
        $cms_about6= DB::table('pages')->where('id',21)->first();
        $cms_about7= DB::table('pages')->where('id',22)->first();

        $partners=DB::table('channel_partners')->get()->take(5);

        return view('about', compact('inner_banner', 'cms_about1', 'cms_about2', 'cms_about3', 'cms_about4', 'cms_about5', 'cms_about6', 'cms_about7', 'partners'));
    }

    public function businessInsurance()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',2)->first();

        $cms_business= DB::table('pages')->where('id',23)->first();

        $business=DB::table('business_insurances')->get();

        return view('business-insurance', compact('inner_banner', 'cms_business', 'business'));
    }

    public function businessInsuranceDetails($id)
    { 
        $inner_banner = DB::table('inner_banners')->where('id',3)->first();

        $business_detail=DB::table('business_insurances')->where('id', $id)->first();

        return view('business-insurance-details', compact('inner_banner', 'business_detail'));
    }

    public function channelPartners()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',4)->first();

        $partners=DB::table('channel_partners')->get()->toArray();

        return view('channel-partners', compact('inner_banner', 'partners'));
    }

    public function contact()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',5)->first();
        return view('contact', compact('inner_banner'));
    }

    public function education()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',6)->first();

        $cms_education= DB::table('pages')->where('id',24)->first();

        $educations=DB::table('education')->get();

        return view('education', compact('inner_banner', 'cms_education', 'educations'));
    }

    public function educationDetails($id)
    { 
        $inner_banner = DB::table('inner_banners')->where('id',7)->first();

        $education_detail=DB::table('education')->where('id',$id)->first();

        return view('education-details', compact('inner_banner', 'education_detail'));
    }

    public function faq()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',8)->first();

        $faqs=DB::table('faqs')->get()->toArray();

        return view('faq', compact('inner_banner', 'faqs'));
    }

    public function login()
    { 
        return view('login');
    }

    public function newsfeed()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',9)->first();

        $cms_news= DB::table('pages')->where('id',25)->first();

        $newsfeeds=DB::table('blogs')->get();

        return view('newsfeed', compact('inner_banner', 'cms_news', 'newsfeeds'));
    }

    public function newsfeedDetails($id)
    { 
        $inner_banner = DB::table('inner_banners')->where('id',10)->first();
        
        //search bar
        if(isset($_GET['q']) && ($_GET['q']!='')){
            $keyword=$_GET['q'];
            $news_recent=DB::table('blogs')->where('short_detail', 'like', '%'.$keyword.'%')->get()->take(3);
        }
        else{
            $news_recent=DB::table('blogs')->orderBy('id', 'DESC')->get()->take(3);
        }
        
        
        $newsfeed_detail=DB::table('blogs')->where('id', $id)->first();

        return view('newsfeed-details', compact('inner_banner', 'news_recent', 'newsfeed_detail'));
    }

    public function partnerBenefits()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',12)->first();

        $cms_benefits= DB::table('pages')->where('id',27)->first();

        return view('partner-benefits', compact('inner_banner', 'cms_benefits'));
    }

    public function partnerIntegration()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',13)->first();

        $cms_integration1= DB::table('pages')->where('id',28)->first();
        $cms_integration2= DB::table('pages')->where('id',29)->first();
        $cms_integration3= DB::table('pages')->where('id',30)->first();
        $cms_integration4= DB::table('pages')->where('id',31)->first();
        $cms_integration5= DB::table('pages')->where('id',32)->first();
        $cms_integration6= DB::table('pages')->where('id',33)->first();

        return view('partner-integration', compact('inner_banner', 'cms_integration1', 'cms_integration2', 'cms_integration3', 'cms_integration4', 'cms_integration5', 'cms_integration6'));
    }

    public function partner()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',11)->first();

        $cms_partner= DB::table('pages')->where('id',26)->first();

        return view('partner', compact('inner_banner', 'cms_partner'));
    }

    public function policiesDisclosures()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',14)->first();

        $cms_policy= DB::table('pages')->where('id',34)->first();

        return view('policies-disclosures', compact('inner_banner', 'cms_policy'));
    }

    public function serviceCenter()
    { 
        $inner_banner = DB::table('inner_banners')->where('id',15)->first();

        $cms_service1= DB::table('pages')->where('id',35)->first();
        $cms_service2= DB::table('pages')->where('id',36)->first();

        return view('service-center', compact('inner_banner', 'cms_service1', 'cms_service2'));
    }

    public function partnerSubmit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_name' => 'required',
            'software_name' => 'required',
            'primary_state' => 'required',
            'customers' => 'required'
        ]);

       $partner = new partner($request->all());
        $partner->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }
    

    public function contactUsSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        $inquiry->inquiries_email = $request->email;
       $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
