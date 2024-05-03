<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $about = About::first();
        $setting = Setting::first();
        return view('admin.about',compact('about','setting'));

    }


    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about', compact('about'));
    }


    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $this->validate($request,[
            'title_about_s1'=>'nullable',
            'description_about_s1'=>'nullable',
            'about1_s1'=>'nullable',
            'about2_s1'=>'nullable',
            'about3_s1'=>'nullable',
            'about4_s1'=>'nullable',

        ]);

        if ($request->has('about_img1_s1')){
            $about_img1_s1 = $request->about_img1_s1;
            $newAboutImage = time().$about_img1_s1->getClientOriginalName();
            $about_img1_s1->move('images',$newAboutImage);
            $about->about_img1_s1='images/'.$newAboutImage;
        }

        if ($request->has('about_img2_s1')){
            $about_img2_s1 = $request->about_img2_s1;
            $newAboutImage = time().$about_img2_s1->getClientOriginalName();
            $about_img2_s1->move('images',$newAboutImage);
            $about->about_img2_s1='images/'.$newAboutImage;
        }

        if ($request->has('about_img3_s1')){
            $about_img3_s1 = $request->about_img3_s1;
            $newAboutImage = time().$about_img3_s1->getClientOriginalName();
            $about_img3_s1->move('images',$newAboutImage);
            $about->about_img3_s1='images/'.$newAboutImage;
        }

        if ($request->has('about_video_s2')){
            $about_video_s2 = $request->about_video_s2;
            $newAboutVideo = time().$about_video_s2->getClientOriginalName();
            $about_video_s2->move('videos',$newAboutVideo);
            $about->about_video_s2='videos/'.$newAboutVideo;
        }

        $about->title_about_s1 = $request->title_about_s1;
        $about->description_about_s1 = $request->description_about_s1;
        $about->about1_s1 = $request->about1_s1;
        $about->about2_s1 = $request->about2_s1;
        $about->about3_s1 = $request->about3_s1;
        $about->about4_s1 = $request->about4_s1;

        $about->title_about_s2 = $request->title_about_s2;
        $about->description_about_s2 = $request->description_about_s2;
        $about->about1_s2 = $request->about1_s2;
        $about->about2_s2 = $request->about2_s2;



        $about->save();

        return redirect()->back();


    }
}
