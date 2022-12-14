<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoials = Testimonials::all();
        return view('web.front.testimonial.index' , compact('testimoials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.testimonial.create');
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
            'img'         => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',
            'title'       => 'required|string|max:100',
            'position'    => 'required|string|max:100',
            'description' => 'required',
        ]);

        $testimonial= new Testimonials([
        
            'title'       => $request->get('title'), 
            'position'    => $request->get('position'), 
            'description' => $request->get('description'),
            '_token'      =>  $request->except('_token'),
    
            $img = $request->file('img'),
            $new_name = date('Y') . 'T'.'.' . $img->getClientOriginalName(),
            $img->move(public_path('uploads') , $new_name),
            
            'img' => $new_name
    
            ]);
            
            $testimonial->save();
            
    
            return redirect()->back()->with('success' , 'Testimonials Added Successfully');

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
    // $testimonials = Testimonials::find($id);

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials = Testimonials::find($id);
        return view('web.front.testimonial.edit' , compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        $request->validate([
            'img'         => 'image|mimes:jpg,png,jpeg,gif.svg|max:4096',
            'title'       => 'required|string|max:100',
            'position'    => 'required|string|max:100',
            'description' => 'required',
        ]);


        $testimonials->title       = $request->title;
        $testimonials->position    = $request->position ;
        $testimonials->description = $request->description ;

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'T' . '.' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $new_name_img);
            $testimonials['img'] = $new_name_img;
        }else{
            unset($testimonials['img']);
        }
        
        $testimonials->Save();
        
        
        return redirect()->back()->with('success' , 'Testimonials Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimonials::findOrFail($id);
        unlink(public_path('/uploads/' . $testimonials->img));
        $testimonials->delete();

        return redirect()->back()->with('success' , 'Testimonials Deleted Successfully');
    }
}
