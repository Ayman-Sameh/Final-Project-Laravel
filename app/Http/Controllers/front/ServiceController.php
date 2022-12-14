<?php

namespace App\Http\Controllers\front;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('web.front.services.index' , compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *      
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.services.create');
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
            'title'       => 'required|string|max:50',
            'description' => 'required',
            'img'         => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',

        ]);

        $service= new Service([
        
        'title'       => $request->get('title'), 
        'description' => $request->get('description'),
        '_token'      => $request->except('_token'),

        $img = $request->file('img'),
        $new_name = date('Y') . 'S'.'.' . $img->getClientOriginalName(),
        $img->move(public_path('uploads') , $new_name),
        
        'img' => $new_name

        ]);
        
        $service->save();
        

        return redirect()->back()->with('success' , 'Services Added Successfully');
        
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        // $service = Service::find($id);
        return view('web.front.services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'       => 'required|string|max:50',
            'description' => 'required',
            // 'img'         => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',
        ]);

        $service->title       = $request->title;
        $service->description = $request->description;

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'S' . '.' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $new_name_img);
            $service['img'] = $new_name_img;
        }else{
            unset($service['img']);
        }
        $service->save();

        return redirect()->back()->with('success' , 'Services Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        unlink(public_path('/uploads/' . $service->img) . $service->service);
        $service->delete();

        return redirect()->back()->with('success' , 'Services Deleted Successfully');
    }
}
