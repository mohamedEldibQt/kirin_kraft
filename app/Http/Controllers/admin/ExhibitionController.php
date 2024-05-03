<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Exhibition;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $exhibition = Exhibition::latest()->paginate(10);
        $setting = Setting::first();
        return view('admin.exhibition.index',compact('exhibition','setting'));
    }

    public function exhibitionTrashed()
    {
        $exhibition = Exhibition::onlyTrashed()->get();
        $setting = Setting::first();
        return view('admin.exhibition.trashed', compact('exhibition','setting'));
    }

    public function create()
    {
        $setting = Setting::first();
        return view('admin.exhibition.create',compact('setting'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'code' => 'nullable',
            'exhibition_name'=>'nullable',
            'exhibition_image' => 'nullable',
            'exhibition_icon'=>'nullable',
        ]);

        $exhibition_image = $request->exhibition_image;
        $newExhibitionImage = time().$exhibition_image->getClientOriginalName();
        $exhibition_image->move('images',$newExhibitionImage);

        $exhibition_icon = $request->exhibition_icon;
        $newExhibitionIcon = time().$exhibition_icon->getClientOriginalName();
        $exhibition_icon->move('images',$newExhibitionIcon);

        $exhibition = Exhibition::create([
            'id' => Auth::id(),
            'code' => $request->code,
            'exhibition_name' => $request->exhibition_name,
            'exhibition_image' => 'images/'.$newExhibitionImage,
            'exhibition_icon' => 'images/'.$newExhibitionIcon,

        ]);
        return redirect()->back();
    }


    public function edit($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        $setting = Setting::first();
        return view('admin.exhibition.edit', compact('exhibition','setting'));
    }

    public function update(Request $request, $id)
    {
        $exhibition = Exhibition::findOrFail($id);
        $this->validate($request,[
            'code' => 'nullable',
            'exhibition_name'=>'nullable',
            'exhibition_image' => 'nullable',
            'exhibition_icon'=>'nullable',
        ]);

        if ($request->has('exhibition_image')){
            $exhibition_image = $request->exhibition_image;
            $newExhibitionImage = time().$exhibition_image->getClientOriginalName();
            $exhibition_image->move('images',$newExhibitionImage);
            $exhibition->exhibition_image='images/'.$newExhibitionImage;
        }

        if ($request->has('exhibition_icon')){
            $exhibition_icon = $request->exhibition_icon;
            $newExhibitionIcon = time().$exhibition_icon->getClientOriginalName();
            $exhibition_icon->move('images',$newExhibitionIcon);
            $exhibition->exhibition_icon='images/'.$newExhibitionIcon;
        }


        $exhibition->code = $request->code;
        $exhibition->exhibition_name = $request->exhibition_name;


        $exhibition->save();

        return redirect()->back();

    }


    public function destroy($id)
    {
        $exhibition = Exhibition::withTrashed()->where('id',$id)->first();
        $exhibition->forceDelete();
        return redirect()->back();
    }

    public function softDestroy($id)
    {
        $exhibition = Exhibition::findOrFail($id);
        $exhibition->delete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $exhibition = Exhibition::withTrashed()->where('id',$id)->first();
        $exhibition->restore();
        return redirect()->back();
    }


}
