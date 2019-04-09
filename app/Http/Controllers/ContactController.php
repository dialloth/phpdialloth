<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    // function index(){
    // 	return view('infos');
    // }
    function create(){
            $Contacts = \App\Contact::all(); //On récupère tous les éléments de notre table contact dans la variable $contact
        return view('infos', array(
      'Contacts'=>$Contacts   /// On a transmis les éléments du tableau contacts à la view et on la retourne. Du coup, une page va se créer avec une view en bas
        ));
    }

    public function store(ContactRequest $request){
        $contact=new Contact();
        $contact->contact_name=request('contact_name');
        $contact->contact_email=request('contact_email');
        $contact->contact_message=request('contact_message');
        $contact->created_at=now();
        $contact->updated_at=now();
        $contact->save();
        

$Contacts = \App\Contact::all();
        return view('confirm', array(
      'Contacts'=>$Contacts   /// On a transmis les éléments du tableau contacts à la view et on la retourne. Du coup, une page va se créer avec une view en bas
        ));
    }

    public function postForm(ContactRequest $request){
        Mail::send('email_contact' , $request->all(), function($message){
           $message ->to('althierno@yahoo.fr')->subject('Contact');
        });

        return view('confirm');

    }
}
