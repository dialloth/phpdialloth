<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    function index(){
    	return view('infos');
    }
    function create(){
        return view('infos');
    }
    public function store(ContactRequest $request){
        $contact=new Contact();
        $contact->contact_name=request('contact_name');
        $contact->contact_email=request('contact_email');
        $contact->contact_message=request('contact_message');
        $contact->created_at=now();
        $contact->updated_at=now();
        $contact->save();

        return view('confirm');
    }

    public function postForm(ContactRequest $request){
        Mail::send('email_contact' , $request->all(), function($message){
           $message ->to('althierno@yahoo.fr')->subject('Contact');
        });

        return view('confirm');

    }
}
