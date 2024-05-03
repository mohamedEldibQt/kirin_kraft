<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\PaintingImage;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $painting = Painting::latest()->paginate(10);
        $paintingImages = Painting::with('images')->first();
        $setting = Setting::first();
        $exhibition = Exhibition::all();
        return view('admin.painting.index',compact('painting','setting','paintingImages','exhibition'));
    }

    public function paintingTrashed()
    {
        $painting = Painting::onlyTrashed()->get();
        $setting = Setting::first();
        return view('admin.painting.trashed', compact('painting','setting'));
    }

    public function create()
    {
        $setting = Setting::first();
        $exhibitions = Exhibition::all();
        return view('admin.painting.create',compact('setting','exhibitions'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'exhibition_id' => 'required|exists:exhibitions,id',
            'painting_name'=>'nullable',
            'painting_image' => 'nullable',
            'painting_description'=>'nullable',
            'painting_size'=>'nullable',
            'painting_colors'=>'nullable',
        ]);

        $paintingImages = $request->file('paintingImages');

        $painting_image = $request->painting_image;
        $newPaintingImage = time().$painting_image->getClientOriginalName();
        $painting_image->move('images',$newPaintingImage);

        $painting = Painting::create([
            'id' => Auth::id(),
            'exhibition_id' => $request->exhibition_id,
            'painting_name' => $request->painting_name,
            'painting_image' => 'images/'.$newPaintingImage,
            'painting_description' => $request->painting_description,
            'painting_size' => $request->painting_size,
            'painting_colors' => $request->painting_colors,
        ]);
        $allowedfileExtension=['jpeg','jpg','png'];
        foreach($paintingImages as $file) {

            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if($check) {
                $newPaintingImages = time().$file->getClientOriginalName();
                $file->move('images',$newPaintingImages);
                PaintingImage::create([
                    'painting_id'=>$painting->id,
                    'painting_imgs' => $newPaintingImages
                ]);
            }
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $painting = Painting::findOrFail($id);
        $setting = Setting::first();
        $exhibitions = Exhibition::all();
        return view('admin.painting.edit', compact('painting','setting','exhibitions'));
    }

    public function update(Request $request,$id)
    {
        $painting = Painting::findOrFail($id);
        $this->validate($request,[
            'exhibition_id' => 'required|exists:exhibitions,id',
            'painting_name'=>'nullable',
            'painting_image' => 'nullable',
            'painting_description'=>'nullable',
            'painting_size'=>'nullable',
            'painting_colors'=>'nullable',
        ]);


        if ($request->has('painting_image')){
            $painting_image = $request->painting_image;
            $newPaintingImage = time().$painting_image->getClientOriginalName();
            $painting_image->move('images',$newPaintingImage);
            $painting->painting_image='images/'.$newPaintingImage;
        }

        $paintingImages = $request->file('paintingImages');

        if ($request->has('paintingImages')){
            $allowedfileExtension=['jpeg','jpg','png'];
            foreach($paintingImages as $file) {
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                    $newPaintingImages = time().$file->getClientOriginalName();
                    $file->move('images',$newPaintingImages);
                    PaintingImage::create([
                        'painting_id'=>$painting->id,
                        'painting_imgs' => $newPaintingImages
                    ]);

                }
            }
        }

        $painting->exhibition_id = $request->exhibition_id;
        $painting->painting_name = $request->painting_name;
        $painting->painting_description = $request->painting_description;
        $painting->painting_size = $request->painting_size;
        $painting->painting_colors = $request->painting_colors;
        $painting->save();

        return redirect()->back();

    }


    public function destroy($id)
    {
        $painting = Painting::withTrashed()->where('id',$id)->first();
        $painting->forceDelete();
        return redirect()->back();
    }

    public function softDestroy($id)
    {
        $painting = Painting::findOrFail($id);
        $painting->delete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $painting = Painting::withTrashed()->where('id',$id)->first();
        $painting->restore();
        return redirect()->back();
    }


}
