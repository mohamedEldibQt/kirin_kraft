<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Setting;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = Setting::first();
        $exhibition = Exhibition::get();
        $painting = Painting::get();
        $partner = Partner::get();
        $review = Review::get();
        return view('admin.dashboard',compact('setting','exhibition','painting','partner','review'));

    }
}
