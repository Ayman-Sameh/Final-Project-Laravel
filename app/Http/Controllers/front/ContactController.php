<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('web.front.contact.index' , compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.home.index');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('web.front.contact.edit' , compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'    => 'required|string|min:2|max:30',
            'email'   => 'required|email',
            'subject' => 'required|string|min:2|max:30',
            'message' => 'required',
        ]);

        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success' , 'Contact Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success' , 'contact Deleted Successfully');
    }
}
