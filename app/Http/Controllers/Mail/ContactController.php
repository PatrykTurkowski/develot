<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {

        $mail_data = $request->validated();
        Mail::to($mail_data['to'])->send(new ContactEmail($mail_data));
        dd($mail_data);

        return redirect(route('welcome'));
    }
    // public function send(ContactRequest $request)
    // {

    //     $data = $request->validated();
    //     // Tworzenie i wysyłanie emaila
    //     Mail::to(config('mail.from_address'))->send(new ContactEmail($data));
    //     dd($data);

    //     // Możesz tu dodać wiadomość flash lub przekierowanie
    //     return back()->with('success', 'Wiadomość została wysłana.');
    // }
}
