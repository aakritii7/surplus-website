<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.pages.course.index',compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.course.create');
    }
    public function store(Request $request){
        $title=$request->title;
        $image=$request->image;
        $course= Course::create([
            'title'=> $title,
            'image'=> $image
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
        $id =$request->id;
        $title=$request->title;
        $course=Course::find($id);
        $course->title=$title;
        $course->save();

        return view(('admin.course'));
    }

    public function view()
    {
        return view('admin.pages.course.view');
    }
}
