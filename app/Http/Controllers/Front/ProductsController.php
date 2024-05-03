<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\Setting;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public  function index()
    {
        $setting = Setting::first();
        $exhibitions = Exhibition::get();
//        $exhibitions = Exhibition::where('id',$id)->with('paintings')->first();
        $paintings = Painting::latest()->paginate(12);
        return view('front.products',compact('setting','exhibitions','paintings'));
    }
}
