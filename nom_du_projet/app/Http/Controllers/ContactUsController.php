<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    public function index()
    {
        $contact = ContactUs::all(); // Get all contacts from the database
        return view("books.contact",compact("contact"));
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    
        $contact = new ContactUs;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->user_id = auth()->id(); // ✅ Add this line
        $contact->save();
    
        return redirect()->route('dashboard')->with('success', 'Contact ajouté avec succès !');
    }
    
    

}
