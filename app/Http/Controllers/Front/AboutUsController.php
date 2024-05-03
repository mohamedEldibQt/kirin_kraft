<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public  function index()
    {
        $setting = Setting::first();
        $about = About::first();
        return view('front.about_us',compact('setting','about'));
    }
}
