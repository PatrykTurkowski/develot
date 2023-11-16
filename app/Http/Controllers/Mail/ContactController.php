<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {

        $mail_data = $request->validated();
        if (env('APP_ENV') != 'production') {
            $mail_data['to'] = 'example@example.com';
        }
        // dd($mail_data);
        Mail::to('example@example.com')->send(new ContactEmail($mail_data));


        return redirect(route('thankYou'));
    }
}
