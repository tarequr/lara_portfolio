<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
use Session;

class AboutController extends Controller
{
    public function index()
    {
    	$abouts = About::orderBy('id','desc')->get();
    	return view('backEnd.about.view-about',compact('abouts'));
    }

    public function create()
    {
    	return view('backEnd.about.add-about');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'title'       => 'required|max:400',
    		'description' => 'required',
    		'phone'       => 'required',
    		'email'       => 'required|unique:abouts',
    		'website'     => 'required',
    		'facebook'    => 'required',
    		'twitter'     => 'required',
    		'linkedin'    => 'required',
    		'instagram'   => 'required',
    		'image'       => 'required',
    	]);

    	$about = new About();
    	$about->title       = $request->title;
    	$about->description = $request->description;
    	$about->phone 	    = $request->phone;
    	$about->email 	    = $request->email;
    	$about->website 	= $request->website;
        $about->facebook    = $request->facebook;
        $about->twitter     = $request->twitter;
        $about->linkedin    = $request->linkedin;
        $about->instagram   = $request->instagram;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/about_images'),$filename);
    		$about['image'] = $filename;
    	}
    	$about->save();

    	Session::flash('message','About Save Successfully!');
    	return redirect()->route('about.view');
    }

    public function edit($id)
    {
    	$editData = About::find($id);
    	return view('backEnd.about.edit-about',compact('editData'));
    }

    public function update(Request $request)
    {
    	$about = About::find($request->id);

    	$this->validate($request,[
    		'title'       => 'required|max:200',
    		'description' => 'required',
    		'phone'       => 'required',
    		'email'       => 'required|unique:abouts,email,'.$about->id,
    		'website'     => 'required',
    		'facebook'    => 'required',
    		'twitter'     => 'required',
    		'linkedin'    => 'required',
    		'instagram'   => 'required',
    		'image'       => 'required'.$about->id,
    	]);

    	$about->title       = $request->title;
    	$about->description = $request->description;
    	$about->phone 	    = $request->phone;
    	$about->email 	    = $request->email;
    	$about->website 	= $request->website;
        $about->facebook    = $request->facebook;
        $about->twitter     = $request->twitter;
        $about->linkedin    = $request->linkedin;
        $about->instagram   = $request->instagram;

        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/about_images/'.$about->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/about_images'),$filename);
    		$about['image'] = $filename;
    	}
        $about->save();

    	Session::flash('message','About Update Successfully!');
    	return redirect()->route('about.view');
    }

    public function delete($id)
    {
    	$about = About::find($id);

    	if (file_exists('public/upload/about_images/' . $about->image) AND ! empty($about->image)) {
    		unlink('public/upload/about_images/' . $about->image);
    	}

    	$about->delete();

    	Session::flash('message','About Delete Successfully!');
    	return redirect()->route('about.view');
    }
}
