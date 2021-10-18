<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository
{
    public function getAll()
    {
        $contact = Contact::orderBy('name')
        ->where('active', 1)
        ->where('number', 'LIKE', '+%')
        ->get()
        ->map(function ($contact) {
            return [
                'contact_id' => $contact->id,
                'name' => $contact->name,
                'number' => $contact->number,
                'status' => $contact->active ? 'active' : 'inactive'
            ];
        });

        return $contact;
    }


    public function store($request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'notes' => 'required'
            ]);

            $contact = Contact::create([
             'name' => $request->name,
             'number' => $request->number, 
             'notes' => $request->notes
         ]);

        return redirect(route('contacts.create'));
    }
}