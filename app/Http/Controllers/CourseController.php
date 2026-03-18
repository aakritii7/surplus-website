<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        return view('admin.pages.course.index',compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.course.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=> 'required|unique:courses|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'image'=>'required|image'
        ]);

        $title=$request->title;
        $image=$request->image;
        $path=$request->file('image')->store("uploads","public");
        $url=Storage::url($path);
        $course= Course::create([
            'title'=> $title,
            'image'=> $url
        ]);
        // dd($course);
        return redirect()->route('admin.course');
    } 

    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.pages.course.edit', compact('course'));
    }
    public function update(Request $request){
        $request->validate([
            'title'=> 'required|unique:courses|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'image' => 'nullable|image'
        ]);
        $id =$request->id;
        $title=$request->title;
        $course=Course::find($id);
        $course->title=$title;
        if($request->hasFile('image')){
            $path=$request->file('image')->store("uploads","public");
            $oldImage=$course->image;
            $relativeOldPathImage= str_replace('/storage','',$oldImage);
            $course->image=Storage::url($path);
            Storage::disk('public')->delete($relativeOldPathImage);
        }
        $course->save();
        return redirect()->route('admin.course');
    }

    public function view()
    {
        return view('admin.pages.course.view');
    }
    public function delete($id){
    $course=Course::find($id);
    $course->delete();
    return redirect()->route('admin.course');
}
}

