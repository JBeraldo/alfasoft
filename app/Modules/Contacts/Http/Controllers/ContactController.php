<?php

namespace App\Modules\Contacts\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Contacts\ContactService;
use App\Modules\Contacts\Http\Requests\ContactRequest;
use App\Modules\Contacts\Http\Requests\ContactUpdateRequest;

class ContactController extends Controller
{
    function __construct(ContactService $contact_service)
    {
        $this->contact_service = $contact_service;
    }

    public function get()
    {
        return response()->json([
            "error" => false,
            "contacts" => $this->contact_service->get(),
        ]);
    }
    public function create(ContactRequest $request)
    {
        $this->contact_service->create($request->toArray());
        return redirect('/');
    }
    public function update(ContactRequest $request)
    {
        $this->contact_service->update($request->toArray());
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $this->contact_service->delete($request->toArray());
        return redirect('/');
    }
}