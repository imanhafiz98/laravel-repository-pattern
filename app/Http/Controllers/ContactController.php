<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    private ContactRepository $contactRepository;

        public function _construct(ContactRepository $contactRepository)
        {
            $this->contactRepository = $contactRepository;
            
        }

    public function index()
    {
        $contact = $this->contactRepository->getAll();

        return $contact;
    }

    public function create()
    {
        return view('contacts.create');   
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $contact = $this->contactRepository->store($request);

        return redirect(route('contacts.create'));
    }
}
