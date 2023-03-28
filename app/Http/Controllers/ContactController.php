<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact.index', [
            'contact' => Contact::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'UserId' => 'required',
            'Email' => 'required|email|unique:contacts,email',
            'Phonenumber' => 'required',
            'IsActive' => 'required',
            'Note' => 'nullable',
        ]);

        Contact::create([
            'UserId' => 1,
            'Email' => $request->Email,
            'Phonenumber' => $request->Phonenumber,
            'IsActive' => 1,
            'Note' => $request->Note,
        ]);

        return redirect()->route('contact.index')->with('success', 'Contact is succesvol toegevoegd');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contact.show', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.update', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'UserId' => 'required',
            'Email' => 'required|email|unique:contacts,email,' . $contact->id,
            'Phonenumber' => 'required',
            'IsActive' => 'required',
            'Note' => 'nullable',
        ]);

        $contact->update($request->all());

        return redirect()->route('contact.index')->with('success', 'Contact is succesvol gewijzigd');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Contact is verwijderd');
    }
}
