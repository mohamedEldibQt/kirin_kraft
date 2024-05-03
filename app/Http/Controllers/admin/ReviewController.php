<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $review = Review::latest()->paginate(10);
        $setting = Setting::first();
        return view('admin.review.index',compact('review','setting'));
    }
    public function reviewTrashed()
    {
        $review = Review::onlyTrashed()->get();
        $setting = Setting::first();
        return view('admin.review.trashed', compact('review','setting'));
    }


    public function destroy($id)
    {
        $review = Review::withTrashed()->where('id',$id)->first();
        $review->forceDelete();
        return redirect()->back();
    }

    public function softDestroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $review = Review::withTrashed()->where('id',$id)->first();
        $review->restore();
        return redirect()->back();
    }

}
