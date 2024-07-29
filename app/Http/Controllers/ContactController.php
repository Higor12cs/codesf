<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send(new ContactMessage(
            $validated['name'],
            $validated['email'],
            $validated['message']
        ));

        return to_route('home')->with('success', 'Mensagem enviada com sucesso! Em breve entraremos em contato.');
    }
}
