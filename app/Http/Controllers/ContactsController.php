<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name'=>'required|min:3',
    		'email'=>'required|email',
    		'message'=>'required|min:10'
    	],[
            'name.required'=>'vous devez donner votre nom',
            'name.min'=>'le minimum réquis pour le nom est de :min char',
            'email.required'=>'vous devez entrer un email',
            'email.email'=>'Vous devez écrie au format email avec des @ et .com/fr/gn/...',
            'message.required'=>'vous devez donner ecrire un message',
            'message.min'=>'le minimum réquis pour le champ message est de :min char',
        ]);

        $message = Message::create($request->only('name','email','message'));

        $mailable = new ContactMessageCreated($message);

        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        flashy()->message('Message envoyé avec succès, nous vous repondrons dans un bref delais!');

        return redirect(route('root_path'));
    }
}
