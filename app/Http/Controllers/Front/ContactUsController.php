<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Exhibition;
use App\Models\Painting;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public  function index()
    {

        $setting = Setting::first();
        return view('front.contact_us',compact('setting'));

    }

    public function create()
    {
        $setting = Setting::first();
        return view('front.contact_us',compact('setting'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'contact_name' => 'nullable',
            'contact_email'=>'nullable',
            'contact_subject'=>'nullable',
            'contact_message'=>'nullable',
        ]);


        $contact = Contact::create([
            'id' => Auth::id(),
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_subject' => $request->contact_subject,
            'contact_message' => $request->contact_message,
        ]);
        return redirect()->back();
    }

}
