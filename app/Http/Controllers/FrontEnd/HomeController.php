<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Experience;
use App\Model\Portfolio;
use App\Model\Education;
use App\Model\Contact;
use App\Model\Profile;
use App\Model\Client;
use App\Model\About;
use App\Model\Skill;
use App\User;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id','desc')->first();
        $about = About::orderBy('id','desc')->first();
        $skills = Skill::orderBy('id','desc')->get();
        $clients = Client::orderBy('id','desc')->get();
        $profile  = Profile::orderBy('id','desc')->first();
        $educations= Education::orderBy('id','desc')->get();
        $portfolios = Portfolio::orderBy('id','desc')->get();
        $experiences = Experience::orderBy('id','desc')->get();

    	return view('frontEnd.home.homeContent',compact('user','about','educations','clients','profile','skills','experiences','portfolios'));
    }


    public function message(Request $request)
    {
    	$this->validate($request,[
    		'name'  => 'required',
    		'email'  => 'required',
    		'subject' => 'required',
    		'message'  => 'required',
    	]);
    	$contact = new Contact();
    	$contact->name    = $request->name;
    	$contact->email   = $request->email;
    	$contact->subject = $request->subject;
    	$contact->message = $request->message;
    	$contact->save();

    	Session::flash('message','Message send Successfully!');
    	return redirect()->back();
    }

    public function download($id)
    {
        $user = User::find($id);
        return response()->download('public/file/resume/'.$user->resume);
    }
}
