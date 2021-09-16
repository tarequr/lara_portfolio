<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class ProfileController extends Controller
{
    public function view()
    {
    	$id = Auth::user()->id;
    	$user = User::find($id);

    	return view('backEnd.user.view-profile',['user'=>$user]);
    }

    public function edit()
    {
    	$id = Auth::user()->id;
    	$editProfile = User::find($id);

    	return view('backEnd.user.edit-profile',['editProfile'=>$editProfile]);
    }

    public function update(Request $request)
    {
        $profileData = User::find(Auth::user()->id);
        $this->validate($request,[
            'name'        => 'required',
            'short_title' => 'max:200',
            'email'       => 'required|unique:users,email,'.$profileData->id,
            'phone'       => 'required',
        ]);
    	$profileData->name 	      = $request->name;
    	$profileData->email       = $request->email;
        $profileData->short_title = $request->short_title;
    	$profileData->phone       = $request->phone;
    	$profileData->gender      = $request->gender;

        /*--------resume section start here----------*/
        if ($request->file('resume')) {
            $file = $request->file('resume');
            @unlink(public_path('file/resume/'.$profileData->resume));
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('public/file/resume/',$filename);
            $profileData->resume = $filename;
        }
        /*--------resume section end here----------*/

    	//image section Start
    	if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/user_images/'.$profileData->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/user_images'),$filename);
    		$profileData['image'] = $filename;
    	}
    	//image section End

    	$profileData->save();

    	Session::flash('message','Profile Update Successfully!');
    	return redirect()->route('profiles.view');
    }

    public function passwordView()
    {
    	return view('backEnd.user.edit-password');
    }

    public function passwordUpdate(Request $request)
    {
    	$this->validate($request,[
    		'newPassword'     => 'required|min:6',
    		'confirmPassword' => 'required_with:newPassword|same:newPassword|min:6'
    	]);
    	
    	if (Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->currentPassword])) {
    		
    		$user = User::find(Auth::user()->id);
    		$user->password = bcrypt($request->newPassword);
    		$user->save();

    		Session::flash('message','Password Change Successfully');
    		return redirect()->route('profiles.view');

    	}else{
    		Session::flash('error','Sorry! your current password dost not match');
    		return redirect()->back();
    	}
    }
}
