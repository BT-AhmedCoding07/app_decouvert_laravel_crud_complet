<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function store(){
    //    dd(request()->all());
    $data = request()->validate([
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message'=> 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactMail($data));
       
        return redirect('contact')->with('message','Votre message a été bien envoyé');
    }
    public function create(){
        
        return view('contact.create');
    }
}
