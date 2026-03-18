<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    //
    public function index(){
        return view('admin.pages.team.index',compact('teams'));
    }
    public function create(){
        return view('admin.pages.team.create');

    }
    public function store(Request $request){
        $request->validate([
            'teamName'=>'required|unique:teams|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'position'=>'required',
            'image'=>'required|image'
        ]);
        $teamName=$request->teamName;
        $position=$request->position;
        $path=$request->file('image')->store('uploads','public');
        $url=Storage::url($path);
        
        $team=Team::create([
            'teamName'=>$teamName,
            'position'=>$position,
            'image' =>$url
        ]);
        return redirect()->route('admin.team');

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
