<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        $category  = Categories::all();
        return view('web.front.portfolio.index' , compact('portfolio' , 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('web.front.portfolio.create' , compact('category'));
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
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $portfolio= new Portfolio([
        
        'name'       => $request->get('name'), 
        'description' => $request->get('description'),
        'category_id' => $request->get('category_id'),
        '_token'      =>  $request->except('_token'),

        $img = $request->file('img'),
        $new_name = date('Y') . 'P'.'.' . $img->getClientOriginalName(),
        $img->move(public_path('uploads') , $new_name),
        
        'img' => $new_name

        ]);
        
        $portfolio->save();
        

        return redirect()->back()->with('success' , 'Portfolio Added Successfully');
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
    public function edit(Portfolio $portfolio)
    {
        $category = Categories::all();
        return view('web.front.portfolio.edit' , compact('portfolio' , 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'img'         => 'required|image|mimes:jpg,png,jpeg,gif.svg|max:4096',
            'name'        => 'required|string|min:2|max:30',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $portfolio = Portfolio::find($id);

        $portfolio->name        = $request->name;
        $portfolio->description = $request->description;
        $portfolio->category_id = $request->category_id;

        if ($img = $request->file('img')) {
            $new_name_img = date('Y') . 'P' . '.' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $new_name_img);
            $portfolio['img'] = $new_name_img;
        }else{
            unset($portfolio['img']);
        }
        // dd($request->all());
        $portfolio->save();

        return redirect()->back()->with('success' , 'Portfolio Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        unlink(public_path('/uploads/' . $portfolio->img));
        $portfolio->delete();

        return redirect()->back()->with('success' , 'Portfolio Deleted Successfully');
    }
}
