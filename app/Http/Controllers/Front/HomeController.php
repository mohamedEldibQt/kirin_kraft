<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\Partner;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        $setting = Setting::first();
        $exhibition = Exhibition::get();
        $painting = Painting::latest()->take(3)->get();
        $partner = Partner::latest()->paginate(10);
        return view('front.home',compact('setting','exhibition','painting','partner'));
    }
}
