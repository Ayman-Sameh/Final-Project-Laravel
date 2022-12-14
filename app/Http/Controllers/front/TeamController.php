<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('web.front.team.index' , compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.front.team.create');
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
            'name'        => 'required|string|min:2|max:30',
            'position' => 'required',
        ]);

        $team= new Team([
        
            'name'       => $request->get('name'), 
            'position'   => $request->get('position'),
            '_token'     =>  $request->except('_token'),
    
            $img = $request->file('img'),
            $new_name = date('Y') . 'Ta'.'.' . $img->getClientOriginalName(),
            $img->move(public_path('uploads') , $new_name),
            
            'img' => $new_name
    
            ]);
            
            $team->save();
            
    
            return redirect()->back()->with('success' , 'Team Added Successfully');
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
    public function edit(Team $team)
    {
        return view('web.front.team.edit' , compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'img'         => 'image|mimes:jpg,png,jpeg,gif.svg|max:4096',
            'name'        => 'required|string|min:2|max:30',
            'position'    => 'required',
        ]);

        $team->name     = $request->name;
        $team->position = $request->position;

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'Ta' . '.' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $new_name_img);
            $team['img'] = $new_name_img;
        }else{
            unset($team['img']);
        }
        $team->save();

        return redirect()->back()->with('success' , 'Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        unlink(public_path('/uploads/' . $team->img) . $team->team);
        $team->delete();

        return redirect()->back()->with('success' , 'Team Deleted Successfully');
    }
}
