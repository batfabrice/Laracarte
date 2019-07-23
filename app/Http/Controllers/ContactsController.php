<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store( ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));

        $mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        flashy('Nous vous répondrons dans les plus brefs délais.');

        return Redirect::home();
    }
}
