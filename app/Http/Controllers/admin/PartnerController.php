<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $partner = Partner::latest()->paginate(10);
        $setting = Setting::first();
        return view('admin.partner.index',compact('partner','setting'));
    }

    public function partnerTrashed()
    {
        $partner = Partner::onlyTrashed()->get();
        $setting = Setting::first();
        return view('admin.partner.trashed', compact('partner','setting'));
    }

    public function create()
    {
        $setting = Setting::first();
        return view('admin.partner.create',compact('setting'));
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'partner_name' => 'nullable',
            'partner_image'=>'nullable',

        ]);

        $partner_image = $request->partner_image;
        $newPartnerImage = time().$partner_image->getClientOriginalName();
        $partner_image->move('images',$newPartnerImage);

        $partner = Partner::create([
            'id' => Auth::id(),
            'partner_name' => $request->partner_name,
            'partner_image' => 'images/'.$newPartnerImage,

        ]);
        return redirect()->back();
    }


    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        $setting = Setting::first();
        return view('admin.partner.edit', compact('partner','setting'));
    }


    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $this->validate($request,[
            'partner_name' => 'nullable',
            'partner_image'=>'nullable',
        ]);

        if ($request->has('partner_image')){
            $partner_image = $request->partner_image;
            $newPartnerImage = time().$partner_image->getClientOriginalName();
            $partner_image->move('images',$newPartnerImage);
            $partner->partner_image='images/'.$newPartnerImage;
        }
        $partner->partner_name = $request->partner_name;
        $partner->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        $partner = Partner::withTrashed()->where('id',$id)->first();
        $partner->forceDelete();
        return redirect()->back();
    }

    public function softDestroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $partner = Partner::withTrashed()->where('id',$id)->first();
        $partner->restore();
        return redirect()->back();
    }

}
