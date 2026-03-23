<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    //
    public function index(){
        $setting=setting::first();
        return view('admin.pages.setting.index',compact('setting'));
    }
    public function store(Request $request){
        $request->validate([
            'siteName'=>'required|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'contactEmail'=>'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'contactPhone' => [
        'required',
        'digits:10',
        'regex:/^(98|97)\d{8}$/'
    ],
            'officeAddress'=>'required',
            'title'=>'required|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'subtitle'=>'required|max:255|string|regex:/^[a-zA-Z\s]+$/'
        ]);

        $setting=setting::first();
        $siteName=$request->siteName;
        $contactEmail=$request->contactEmail;
        $contactPhone=$request->contactPhone;
        $officeAddress=$request->officeAddress;
        $title=$request->title;
        $subtitle=$request->subtitle;
        if($setting)
        {
            $setting->siteName=$siteName;
            $setting->contactEmail=$contactEmail;
            $setting->contactPhone=$contactPhone;
            $setting->officeAddress=$officeAddress;
            $setting->title=$title;
            $setting->subtitle=$subtitle;

            //other properties
            $setting->save();
        }else{
            
        $setting=setting::create([
            'siteName'=>$siteName,
            'contactEmail'=>$contactEmail,
            'contactPhone'=>$contactPhone,
            'officeAddress'=>$officeAddress,
            'title'=>$title,
            'subtitle'=>$subtitle
        ]);
        $setting->save();
        }


        Alert::success('Success',"Setting is successfully saved");
        return redirect()->route('admin.setting');
    }
}
