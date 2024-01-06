<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function profile()
    {
        $data['page'] = 'profile';
        $data['get'] = About::find(1);
        return view('app.about.profile', $data);
    }
    
    public function profileEdit()
    {
        $data['page'] = 'profile';
        $data['get'] = About::find(1);
        return view('app.about.profile_edit', $data);
    }


    public function letter()
    {
        $data['page'] = 'letter';
        $data['get'] = About::find(1);
        return view('app.about.letter', $data);
    }
    
    public function lettereEdit()
    {
        $data['page'] = 'letter';
        $data['get'] = About::find(1);
        return view('app.about.letter_edit', $data);
    }


    public function vimission()
    {
        $data['page'] = 'vimission';
        $data['get'] = About::find(1);
        return view('app.about.vimission', $data);
    }
    
    public function vimissionEdit()
    {
        $data['page'] = 'vimission';
        $data['get'] = About::find(1);
        return view('app.about.vimission_edit', $data);
    }


    public function contact()
    {
        $data['page'] = 'conctact';
        $data['get'] = About::find(1);
        return view('app.about.contact', $data);
    }
    
    public function contactEdit()
    {
        $data['page'] = 'contact';
        $data['get'] = About::find(1);
        return view('app.about.contact_edit', $data);
    }


    public function update(Request $request)
    {
        $from = $request->from;

        if($from == "profile") {
            $data = ['profile' => $request->profile ];
        }

        if($from == "letter") {
            $data = ['letter' => $request->letter ];
        }

        if($from == "vimission") {
            $data = [
                'vission' => $request->vission,
                'mission' => $request->mission,
            ];
        }

        if($from == "contact") {
            $data = [
                'address' => $request->address,
                'phone' => $request->phone,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'fax' => $request->fax,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
            ];
        }

        About::where('id','1')->update($data);
        return redirect($request->direct)->with('success', 'Updated successfully.');

    }



}
