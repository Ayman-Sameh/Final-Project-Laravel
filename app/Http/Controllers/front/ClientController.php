<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('web.front.client.index' , compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.client.create');
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
            'img' => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',
        ]);

        $client= new Client([
        
            '_token' =>  $request->except('_token'),
    
            $img = $request->file('img'),
            $new_name = date('Y') . 'C'.'.' . $img->getClientOriginalName(),
            $img->move(public_path('uploads') , $new_name),
            
            'img' => $new_name
    
            ]);
            
            $client->save();
            
    
            return redirect()->back()->with('success' , 'Client Added Successfully');
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
    public function edit(Client $client)
    {
        return view('web.front.client.edit' , compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',
        ]);

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'C' . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads'), $new_name_img);
            $client['img'] = $new_name_img;
        }else{
            unset($client['img']);
        }
        $client->update();
        
        
        return redirect()->back()->with('success' , 'Client Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Client $client)
    {
        unlink(public_path('/uploads/' . $client->img) . $client->client);
        $client->delete();

        return redirect()->back()->with('success' , 'Client Deleted Successfully');
    }
}
