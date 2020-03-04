<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    function create()
    {
    	return view('contacts.create');
    }
}
