<?php

namespace App\Http\Controllers;

use App\Modules\Contacts\Contact;
use App\Modules\Contacts\ContactService;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __construct(ContactService $contact_service)
    {
        $this->contact_service = $contact_service;
    }
    
    public function index($data = null)
    {
        $contacts = $this->contact_service->get();
        return view('index.index',compact('contacts'));
    }
    public function create()
    {
        return view('create.index');
    }
    public function edit($id)
    {
        $contact = $this->contact_service->find($id);
        return view('create.index',compact('contact'));
    }
}
