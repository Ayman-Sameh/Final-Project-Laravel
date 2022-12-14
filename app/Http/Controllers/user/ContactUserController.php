<?php

namespace App\Http\Controllers\user;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUserController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.user.home.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|min:2|max:30',
            'email'   => 'required|email',
            'subject' => 'required|string|min:2|max:30',
            'message' => 'required',
        ]);

        $contact = new Contact([
            'name'    => $request->get('name'),
            'email'   => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
            '_token'  => $request->except('_token'),
        ]);

        $contact->save();

        return redirect()->back()->with('success' , 'Contact Added Successfully');
    }

}
