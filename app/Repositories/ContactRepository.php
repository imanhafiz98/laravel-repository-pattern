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
}