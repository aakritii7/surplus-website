<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index(){
        return view('admin.pages.registration.index');
    }
    public function create(){
        return view('admin.pages.registration.create');

    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|unique:registrations|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'image'=>'required|image'

        ]);
        $id=$request->id;
        $title=$request->title;
        $image=$request->image;

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
