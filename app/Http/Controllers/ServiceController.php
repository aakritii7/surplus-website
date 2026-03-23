<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::paginate(2);
        return view('admin.pages.service.index',compact('services'));
    }
    public function create(){
        return view('admin.pages.service.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|unique:services|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'description'=>'required|unique:services|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'image'=>'required|image'
        ]);
        $id=$request->id;
        $title=$request->title;
        $description=$request->description;
        $path=$request->file('image')->store('uploads','public');
        $url=Storage::url($path);

        $service= Service::create([
            'title'=>$title,
            'description'=>$description,
            'image'=>$url
        ]);
        Alert::success('Success','Service is successfully created');
        return redirect()->route('admin.service');
    }
    public function edit($id){
        $service= Service::find($id);
        return view('admin.pages.service.edit',compact('service'));
    }
    public function update(Request $request){
        $request->validate([
            'title'=>'required|unique:services|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'description'=>'required|unique:services|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'image'=>'nullable|image'
        ]);
        //  dd($request);
        $id= $request->id;
        // dd($id);
        $title= $request->title;
        $description=$request->description;
        $service= Service::find($id);
        // dd($service);
        $service->title=$title;
        $service->description=$description;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('uploads','public');
            $oldImageUrl=$service->image;
            $relativeOldImagePath= str_replace('/storage','',$oldImageUrl);
            $service->image=Storage::url($path);
            Storage::disk('public')->delete($relativeOldImagePath);
        }
        $service->save();
        return redirect()->route('admin.service');
    }
    public function delete($id){
        $service= Service::find($id);
        $service->delete();
        Alert::success('Success','Service is successsfully deleted');
        return redirect()->route('admin.service');
    }
}
