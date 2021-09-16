<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Education;
use Session;

class EducationController extends Controller
{
    public function index()
    {
    	$educations = Education::orderBy('id','desc')->get();
    	return view('backEnd.education.view-education',compact('educations'));
    }

    public function create()
    {
    	return view('backEnd.education.add-education');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'start_date'  => 'required',
    		'degree'      => 'required',
    		'institution' => 'required',
    		'location'    => 'required',
    	]);
    	$education = new Education();
    	$education->start_date  = $request->start_date;
    	$education->end_date    = $request->end_date;
    	$education->degree 	    = $request->degree;
    	$education->institution = $request->institution;
    	$education->location 	= $request->location;
        $education->description = $request->description;
    	$education->save();

    	Session::flash('message','Education Save Successfully!');
    	return redirect()->route('education.view');
    }

    public function edit($id)
    {
    	$editData = Education::find($id);
    	return view('backEnd.education.edit-education',compact('editData'));
    }

    public function update(Request $request)
    {
    	$education = Education::find($request->id);
    	$this->validate($request,[
    		'start_date'  => 'required',
    		'degree'      => 'required',
    		'institution' => 'required',
    		'location'    => 'required',
    	]);

    	$education->start_date  = $request->start_date;
    	$education->end_date    = $request->end_date;
    	$education->degree 	    = $request->degree;
    	$education->institution = $request->institution;
    	$education->location 	= $request->location;
        $education->description = $request->description;
    	$education->save();

    	Session::flash('message','Education Update Successfully!');
    	return redirect()->route('education.view');
    }

    public function delete($id)
    {
    	$education = Education::find($id);
    	$education->delete();

    	Session::flash('message','Education Delete Successfully!');
    	return redirect()->route('education.view');
    }
}
