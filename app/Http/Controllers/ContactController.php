<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    private $contactRepository;

        public function _construct(ContactRepository $contactRepository)
        {
            $this->contactRepository = $contactRepository;
            
        }

    public function index()
    {
        $contact = $this->contactRepository->getAll();

        return $contact;
    }
}
