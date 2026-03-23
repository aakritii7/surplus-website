<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    //
    public function index(){
        $testimonials = Testimonial::paginate(2);
        return view('admin.pages.testimonial.index',compact('testimonials'));
    }
    public function create(){
        return view('admin.pages.testimonial.create');

    }
    public function store(Request $request){
        $request->validate([
            "client"=>"required|unique:testimonials|max:255|string|regex:/^[a-zA-Z\s]+$/",
            "rating"=>"required|regex:/^[0-5](\.[0-9])?$/",
            "image"=>"required|image"
        ]);
        $client=$request->client;
        $rating=$request->rating;
        $path=$request->file('image')->store('uploads','public');
        $url=Storage::url($path);

        $testimonial=Testimonial::create([
            'client'=>$client,
            'rating'=>$rating,
            'image'=>$url
        ]);
        Alert::success('Success','Testimonial is successfully created');
        return redirect()->route('admin.testimonial');
    }
    public function edit($id){
        $testimonial=Testimonial::find($id);
        return view('admin.pages.testimonial.edit',compact('testimonial'));

    }
    public function update(Request $request){
        $request->validate([
            "client"=>"required|unique:testimonials|max:255|string|regex:/^[a-zA-Z\s]+$/",
            "rating"=>"required|regex:/^[0-5](\.[0-9])?$/",
            "image"=>"nullable|image"
        ]);
        $id=$request->id;
        $client=$request->client;
        $rating=$request->rating;
        $testimonial= Testimonial::find($id);
        $testimonial->client=$client;
        $testimonial->rating=$rating;
        if($request->hasFile('image')){
            $path=$request->file('image')->store('uploads','public');
            $OldImageUrl=$testimonial->image;
            $relativeOldImagePath=str_replace('/storage','',$OldImageUrl);
            $testimonial->image=Storage::url($path);
            Storage::disk('public')->delete($relativeOldImagePath);
        }
        $testimonial->save();
        return redirect()->route('admin.testimonial');
    }
    public function delete($id){
        $testimonial=Testimonial::find($id);
        $testimonial->delete();
        Alert::success('Success','Testimonial is siccessfully deleted');
        return redirect()->route('admin.testimonial');


    }
}
