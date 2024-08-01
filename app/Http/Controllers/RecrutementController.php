<?php

namespace App\Http\Controllers;

use App\Models\Recrutement;
use App\Http\Requests\StoreRecrutementRequest;
use App\Http\Requests\UpdateRecrutementRequest;
use App\Models\Contact;

class RecrutementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vitrine.pages.recrutement.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post=[];

        return view('admin.pages.contact.index',compact('post'));
    }

    public function liste() 
    {
        $listes= Contact::latest()->take(5)->get();

        return view('admin.pages.contact.index',compact('listes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecrutementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recrutement $recrutement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recrutement $recrutement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecrutementRequest $request, Recrutement $recrutement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recrutement $recrutement)
    {
        //
    }
}
