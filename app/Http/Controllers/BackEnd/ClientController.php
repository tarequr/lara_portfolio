<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Client;
use Session;

class ClientController extends Controller
{
    public function index()
    {
    	$clients = Client::orderBy('id','desc')->get();
    	return view('backEnd.client.view-client',compact('clients'));
    }

    public function create()
    {
    	return view('backEnd.client.add-client');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'link'  => 'required',
    		'image' => 'required',
    	]);

    	$client       = new Client();
    	$client->link = $request->link;

        if ($request->file('image')) {
    		$file = $request->file('image');
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/client_images'),$filename);
    		$client['image'] = $filename;
    	}
    	$client->save();

    	Session::flash('message','Client Save Successfully!');
    	return redirect()->route('client.view');
    }

    public function edit($id)
    {
    	$editData = Client::find($id);
    	return view('backEnd.client.edit-client',compact('editData'));
    }

    public function update(Request $request)
    {
    	$this->validate($request,[
    		'link'  => 'required',
    	]);

    	$client       = Client::find($request->id);
    	$client->link = $request->link;
        if ($request->file('image')) {
    		$file = $request->file('image');
    		@unlink(public_path('upload/client_images/'.$client->image));
    		$filename = date('YmdHi').$file->getClientOriginalName();
    		$file->move(public_path('upload/client_images'),$filename);
    		$client['image'] = $filename;
    	}
    	$client->save();

    	Session::flash('message','Client Update Successfully!');
    	return redirect()->route('client.view');
    }

    public function delete($id)
    {
    	$client = Client::find($id);

    	if (file_exists('public/upload/client_images/' . $client->image) AND ! empty($client->image)) {
    		unlink('public/upload/client_images/' . $client->image);
    	}

    	$client->delete();

    	Session::flash('message','Client Delete Successfully!');
    	return redirect()->route('client.view');
    }
}
