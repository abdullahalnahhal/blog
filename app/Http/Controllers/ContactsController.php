<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\MainControllers\AdminsController as Main;
use App\Http\Requests\ContactsRequest;

class ContactsController /*extends Main*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::orderBy('id', 'DESC')->first();
        $contacts = json_decode($contacts->info, true);
        // dd(collect($contacts));
        return view('admin.contacts.form',[
            'active' => 'Contacts',
            'contacts' => $contacts,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactsRequest $request)
    {
        $contacts = Contacts::orderBy('id', 'DESC')->first();
        $contacts = json_decode($contacts, true);

        return view('admin.contacts.form',[
            'active' => 'Admins',
            'contacts' => $contacts,
        ]);
    }
    /**
     * Show The Index For Guests.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestIndex()
    {
      $contacts = Contacts::orderBy('id', 'DESC')->first();
      $contacts = json_decode($contacts->info, true);
      return view('guest.contacts',[
        'active' => 'Contacts',
        'contacts' => $contacts,
      ]);
    }
}
