<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Profile;
use Session;

class ProfileInformController extends Controller
{
    public function index()
    {
    	$profiles = Profile::orderBy('id','desc')->get();
    	return view('backEnd.profile.view-profile',compact('profiles'));
    }

    public function create()
    {
    	return view('backEnd.profile.add-profile');
    }

    public function store(Request $request)
    {
    	$profile = new Profile();
        $profile->themeforest = $request->themeforest;
        $profile->dribbble    = $request->dribbble;
        $profile->behance     = $request->behance;
        $profile->github      = $request->github;
    	$profile->flickr      = $request->flickr;
    	$profile->smug        = $request->smug;
    	$profile->squarespace = $request->squarespace;
    	$profile->save();

        //Profile::create($request->all());

    	Session::flash('message','Profile Save Successfully!');
    	return redirect()->route('profile.view');
    }

    public function edit($id)
    {
    	$editData = Profile::find($id);
    	return view('backEnd.profile.edit-profile',compact('editData'));
    }

    public function update(Request $request)
    {
    	$profile = Profile::find($request->id);
    	$profile->themeforest = $request->themeforest;
        $profile->dribbble    = $request->dribbble;
        $profile->behance     = $request->behance;
        $profile->github      = $request->github;
        $profile->flickr      = $request->flickr;
        $profile->smug        = $request->smug;
        $profile->squarespace = $request->squarespace;
    	$profile->save();

    	Session::flash('message','Profile Update Successfully!');
    	return redirect()->route('profile.view');
    }

    public function delete($id)
    {
    	$profile = Profile::find($id);
    	$profile->delete();

    	Session::flash('message','Profile Delete Successfully!');
    	return redirect()->route('profile.view');
    }
}
