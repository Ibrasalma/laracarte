<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ControlRequestForm;
use App\Mail\ContactMessageCreated;

class ContactsController extends Controller
{
    function create()
    {
    	return view('contacts.create');
    }
    function store(ControlRequestForm $request)
    {
    	return new ContactMessageCreated($request->name,$request->email,$request->message);
    }
}
