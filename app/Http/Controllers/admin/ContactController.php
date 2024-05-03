<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $contact = Contact::latest()->paginate(10);
        $setting = Setting::first();
        return view('admin.contact',compact('contact','setting'));
    }



    public function destroy($id)
    {
        $contact = Contact::where('id',$id)->first();
        $contact->forceDelete();
        return redirect()->back();
    }

}
