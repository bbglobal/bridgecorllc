<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Services\MailchimpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request, MailchimpService $mailchimp)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');

        $response = $mailchimp->subscribe($email);

        if ($response === 200) {
            return response()->json(['success' => true, 'message' => 'You have been subscribed successfully!']);
        } elseif ($response === 'already_subscribed') {
            return response()->json(['success' => false, 'message' => 'You are already subscribed!']);
        } elseif ($response === 'invalid_email') {
            return response()->json(['success' => false, 'message' => 'Invalid email address.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Failed to subscribe. Please try again later.'], 500);
        }
    }

    public function submit(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // dd($request->all());

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];

        Mail::to('david.brandboosters@gmail.com')->send(new ContactMail($data));

        return response()->json(['success' => true, 'message' => 'Thank you for your message. We will get back to you soon!']);
    }
}
