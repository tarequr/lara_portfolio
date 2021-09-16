<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Experience;
use Session;

class ExperienceController extends Controller
{
    public function index()
    {
    	$experiences = Experience::orderBy('id','desc')->get();
    	return view('backEnd.experience.view-experience',compact('experiences'));
    }

    public function create()
    {
    	return view('backEnd.experience.add-experience');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'start_date'  => 'required',
    		'company_name'=> 'required',
    		'designation' => 'required',
    		'location'    => 'required',
    	]);
    	$experience = new Experience();
    	$experience->start_date   = $request->start_date;
    	$experience->end_date     = $request->end_date;
    	$experience->company_name = $request->company_name;
    	$experience->designation  = $request->designation;
    	$experience->location 	= $request->location;
        $experience->description  = $request->description;
    	$experience->save();

    	Session::flash('message','Experience Save Successfully!');
    	return redirect()->route('experience.view');
    }

    public function edit($id)
    {
    	$editData = Experience::find($id);
    	return view('backEnd.experience.edit-experience',compact('editData'));
    }

    public function update(Request $request)
    {
    	$experience = Experience::find($request->id);
    	$this->validate($request,[
    		'start_date'  => 'required',
    		'company_name'=> 'required',
    		'designation' => 'required',
    		'location'    => 'required',
    	]);

    	$experience->start_date   = $request->start_date;
    	$experience->end_date     = $request->end_date;
    	$experience->company_name = $request->company_name;
    	$experience->designation  = $request->designation;
    	$experience->location 	= $request->location;
        $experience->description  = $request->description;
    	$experience->update();

    	Session::flash('message','Experience Update Successfully!');
    	return redirect()->route('experience.view');
    }

    public function delete($id)
    {
    	$experience = Experience::find($id);
    	$experience->delete();

    	Session::flash('message','Experience Delete Successfully!');
    	return redirect()->route('experience.view');
    }
}
