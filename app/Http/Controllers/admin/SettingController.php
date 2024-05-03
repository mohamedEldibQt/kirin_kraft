<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings',compact('setting'));

    }


    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings', compact('setting'));
    }


    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $this->validate($request,[
            'username'=>'nullable',
            'phone_number'=>'nullable',
            'email'=>'nullable',
            'location'=>'nullable',
            'logo'=>'nullable',

        ]);

        if ($request->has('logo')){
            $logo = $request->logo;
            $newLogoImage = time().$logo->getClientOriginalName();
            $logo->move('images',$newLogoImage);
            $setting->logo='images/'.$newLogoImage;
        }

        if ($request->has('cover')){
            $cover = $request->cover;
            $newCoverImage = time().$cover->getClientOriginalName();
            $cover->move('images',$newCoverImage);
            $setting->cover='images/'.$newCoverImage;
        }

        if ($request->has('signature')){
            $signature = $request->signature;
            $newSignatureImage = time().$signature->getClientOriginalName();
            $signature->move('images',$newSignatureImage);
            $setting->signature='images/'.$newSignatureImage;
        }

        $setting->username = $request->username;
        $setting->phone_number = $request->phone_number;
        $setting->email = $request->email;
        $setting->location = $request->location;
        $setting->bio = $request->bio;
        $setting->title_background = $request->title_background;
        $setting->your_name = $request->your_name;
        $setting->title_card = $request->title_card;
        $setting->bio_card = $request->bio_card;
        $setting->followers = $request->followers;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->website = $request->website;

        $setting->save();

        return redirect()->back();


    }
}
