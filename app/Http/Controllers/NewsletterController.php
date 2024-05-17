<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MailchimpService;

class NewsletterController extends Controller
{
    public function subscribe(Request $request, MailchimpService $mailchimp)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');

        // Subscribe user to Mailchimp list
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
}
