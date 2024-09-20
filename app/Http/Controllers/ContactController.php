<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $to = "mamx1404@gmail.com";
        $subject = "Nouveau message de votre formulaire de contact";

        $body = "Nom: " . $validated['name'] . "\n";
        $body .= "Email: " . $validated['email'] . "\n";
        $body .= "Message:\n" . $validated['message'];

        Mail::raw($body, function ($message) use ($to, $subject, $validated) {
            $message->to($to)
                ->subject($subject)
                ->replyTo($validated['email']);
        });

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
