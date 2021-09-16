<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;
use Session;

class ContactController extends Controller
{
    public function index()
    {
    	$contacts = Contact::orderBy('id','desc')->get();
    	return view('backEnd.contact.view-contact',compact('contacts'));
    }

    // public function draftMsg()
    // {
    //     $contacts = Contact::orderBy('id','desc')->where('status',0)->get();
    // 	return view('backEnd.contact.draft-message',compact('contacts'));
    // }

    public function delete($id)
    {
    	$contact = Contact::find($id);
    	$contact->delete();

    	Session::flash('message','Contact Delete Successfully!');
    	return redirect()->route('contact.view');
    }
}
