<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Skill;
use Session;

class SkillController extends Controller
{
    public function index()
    {
    	$skills = Skill::orderBy('id','desc')->get();
    	return view('backEnd.skill.view-skill',compact('skills'));
    }

    public function create()
    {
    	return view('backEnd.skill.add-skill');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name'       => 'required',
    		'percentage' => 'required',
    	]);
    	$skill = new Skill();
    	$skill->name       = $request->name;
    	$skill->percentage = $request->percentage;
    	$skill->save();

    	Session::flash('message','Skill Save Successfully!');
    	return redirect()->route('skill.view');
    }

    public function edit($id)
    {
    	$editData = Skill::find($id);
    	return view('backEnd.skill.edit-skill',compact('editData'));
    }

    public function update(Request $request)
    {
    	$this->validate($request,[
    		'name'       => 'required',
    		'percentage' => 'required',
    	]);

    	$skill = Skill::find($request->id);
    	$skill->name       = $request->name;
    	$skill->percentage = $request->percentage;
    	$skill->save();

    	Session::flash('message','Skill Update Successfully!');
    	return redirect()->route('skill.view');
    }

    public function delete($id)
    {
    	$skill = Skill::find($id);
    	$skill->delete();

    	Session::flash('message','Skill Delete Successfully!');
    	return redirect()->route('skill.view');
    }
}
