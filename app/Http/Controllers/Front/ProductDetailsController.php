<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductDetailsController extends Controller
{
    public  function index()
    {
        $setting = Setting::first();
        $painting = Painting::first();
        $exhibition = Exhibition::get();
        $paintings = Painting::latest()->take(3)->get();
        $review = Review::get();
        return view('front.product_details',compact('setting','painting','exhibition','paintings','review'));
    }

    public function create()
    {
        $setting = Setting::first();
        return view('front.product_details',compact('setting'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'reviewer_name' => 'nullable',
            'reviewer_email'=>'nullable',
            'reviewer_reply'=>'nullable',

        ]);

        $review = Review::create([
            'id' => Auth::id(),
            'reviewer_name' => $request->reviewer_name,
            'reviewer_email' => $request->reviewer_email,
            'reviewer_reply' => $request->reviewer_reply,
        ]);
        return redirect()->back();
    }
}
