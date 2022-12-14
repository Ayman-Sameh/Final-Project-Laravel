<?php

namespace App\Http\Controllers\user;

use App\Models\Team;
use App\Models\About;
use App\Models\Client;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Categories;
use App\Models\Testimonials;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeUserController extends Controller
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
        
        return view('web.user.home.index' , compact('service','about','client','testimonial','portfolio','category','team'));
    }
}
