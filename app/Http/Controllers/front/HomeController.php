<?php

namespace App\Http\Controllers\front;

use App\Models\About;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Testimonials;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service      = Service::all();
        $about        = About::all();
        $client       = Client::all();
        $testimonial  = Testimonials::all();
        $category     = Categories::all();
        $portfolio    = Portfolio::all();
        $team         = Team::all();
        
        return view('web.front.home.index' , compact('service','about','client','testimonial','portfolio','category','team'));
    }
}
