<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmailContact(Request $request)
    {
        Mail::to('contato@volteon.com.br')->send(new Contact($request->get('nameInput'), $request->get('emailInput'), $request->get('mensagemInput')));

        if (Mail::failures()) {
            return '<div class="alert alert-danger" role="alert">Error: Email não enviado!</div>';
        } else {
            return '<div class="alert alert-success" role="alert">Thank you. We will contact you shortly.</div>';
        }
        
    }
}
