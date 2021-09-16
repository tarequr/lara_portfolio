<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Portfolio;
use Session;

class PortfolioController extends Controller
{
    public function index()
    {
    	$portfolios = Portfolio::orderBy('id','desc')->get();
    	return view('backEnd.portfolio.view-portfolio',compact('portfolios'));
    }

    public function create()
    {
    	return view('backEnd.portfolio.add-portfolio');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name'  => 'required',
    		'link'  => 'required',
    		'image' => 'required',
    	]);

    	$portfolio = new Portfolio();
    	$portfolio->name = $request->name;
    	$portfolio->link = $request->link;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/portfolio_images'),$filename);
    		$portfolio['image'] = $filename;
    	}
    	$portfolio->save();

    	Session::flash('message','Portfolio Save Successfully!');
    	return redirect()->route('portfolio.view');
    }

    public function edit($id)
    {
    	$editData = Portfolio::find($id);
    	return view('backEnd.portfolio.edit-portfolio',compact('editData'));
    }

    public function update(Request $request)
    {
    	$this->validate($request,[
    		'name'  => 'required',
    		'link'  => 'required',
    	]);

    	$portfolio = Portfolio::find($request->id);
    	$portfolio->name = $request->name;
    	$portfolio->link = $request->link;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/portfolio_images/'.$portfolio->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/portfolio_images'),$filename);
    		$portfolio['image'] = $filename;
    	}
    	$portfolio->save();

    	Session::flash('message','Portfolio Update Successfully!');
    	return redirect()->route('portfolio.view');
    }

    public function delete($id)
    {
    	$portfolio = Portfolio::find($id);

    	if (file_exists('public/upload/portfolio_images/' . $portfolio->image) AND ! empty($portfolio->image)) {
    		unlink('public/upload/portfolio_images/' . $portfolio->image);
    	}

    	$portfolio->delete();

    	Session::flash('message','Portfolio Delete Successfully!');
    	return redirect()->route('portfolio.view');
    }
}
