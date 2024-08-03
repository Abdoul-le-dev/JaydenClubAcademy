<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vitrine.pages.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( StoreContactRequest $request)
    {
        Contact::create(
            [
                'nom'=> $request->name,
                'phone'=> $request->phone,
                'object'=> $request->message,
                'mail'=> $request->email,
            ]);

        return redirect()->route('contact-view')->with('success',"Votre demande a été transmise avec succès "); 
    }
    public function liste()
    {
        $listes= Contact::latest()->take(5)->get();

        return view('admin.pages.contact.index',compact('listes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
