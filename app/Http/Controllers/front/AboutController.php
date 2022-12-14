<?php

namespace App\Http\Controllers\front;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('web.front.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.about.create');
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
            'title'       => 'required|string|max:100',
            'description' => 'required',
            'video'       => 'required|mimes:mp4,mov,ogg | max:20480',
            'img'         => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',

        ]);

        $about = new About([

            'title'       => $request->get('title'),
            'description' => $request->get('description'),
            '_token'      => $request->get('_token'),

            $img          = $request->file('img'),
            $new_name_img = date('Y') . 'A' . '.' . $img->getClientOriginalName(),
            $img->move(public_path('uploads') , $new_name_img),
            'img' => $new_name_img,
     
            $video = $request->file('video'),
            $new_name_video = date('Y') . 'A' . '.' . $video->getClientOriginalName(),
            $video->move(public_path('uploads') , $new_name_video),
            'video' => $new_name_video,

        ]);

        $about->save();

        // about::create($request->except('_token'));

        return redirect()->back()->with('success' , 'About Added Successfully');
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
    public function edit(About $about)
    {
       return view('web.front.about.edit' , compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , About $about)
    {
        $request->validate([
            'title'       => 'required|string|max:100',
            'description' => 'required',
            // 'video'       => 'mimes:mp4,mov,ogg|max:20480',
            // 'img'         => 'image|mimes:jpg,png,jpeg,gif.svg|max:4096',

        ]);

        // $input = $request->all();
      
        $about->title       = $request->title ; 
        $about->description = $request->description ; 

        if ($video = $request->file('video')) {
            $new_name_video = date('Y') . 'A' . '.' . $video->getClientOriginalName();
            $video->move(public_path('uploads'), $new_name_video);
            $about['video'] = $new_name_video;
        }else{
            unset($about['video']);
        }

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'A' . '.' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $new_name_img);
            $about['img'] = $new_name_img;
        }else{
            unset($about['img']);
        }
          
        $about->save();

        return redirect()->back()->with('success' , 'Abouts Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        unlink(public_path('/uploads/' . $about->img) . $about->about);
        unlink(public_path('/uploads/' . $about->video) . $about->about);
        $about->delete();

        return redirect()->back()->with('success' , 'Abouts Deleted Successfully');
    }
}
