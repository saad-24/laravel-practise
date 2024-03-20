<?php

namespace App\Http\Controllers;

use App\Mail\QueryResponse;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'comment' => 'required|string',
        ]);

        // Create the comment
        $comment = new Contact();
        $comment->user_id = Auth::id();
        $comment->query = $request->input('comment');
        $comment->save();

        return redirect()->back()->with('success', 'Comment send successfully.');
    }

    public function respond(Request $request, Contact $contact)
    {
        // Update the contact record with the admin response
        $contact->response = $request->input('response');
        $contact->save();

        // Retrieve user email based on user ID
        $user = User::find($contact->user_id);
        $userEmail = 'mailtrap@demomailtrap.com';

        Mail::to($userEmail)->send(new QueryResponse($contact));

        return redirect()->route('admin.panel.queries')->with('success', 'Response sent successfully.');
    }

    public function showResponseForm(Contact $contact)
    {
        return view('admin.response_form', compact('contact'));
    }


}
