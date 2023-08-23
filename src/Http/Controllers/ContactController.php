<?php

namespace Rumman\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rumman\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        dd(config('contact'));
        Contact::create($request->all());
        return redirect(route('contact'));
    }

}
