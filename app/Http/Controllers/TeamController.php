<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    //
    public function index(){
        $teams = Team::paginate(10);
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
        Alert::success('Success',"Team created successfully");
        return redirect()->route('admin.team');

    }
    public function edit($id){
        $team = Team::find($id);
        return view('admin.pages.team.edit', compact('team'));

    }
    
    public function update(Request $request){
        $request->validate([
            'teamName'=>'required|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'position'=>'required',
            'image'=>'nullable|image'
        ]);
        $id=$request->id;
        $teamName=$request->teamName;
        $position=$request->position;
        $team= Team::find($id);
        $team->position=$position;
        $team->teamName=$teamName;
        if($request->hasFile('image')){
            $path= $request->file('image')->store('uploads','public');
            $oldImageUrl=$team->image;
            $relativePathOldImageUrl=str_replace('/storage','',$oldImageUrl);
            $team->image=Storage::url($path);
            Storage::disk('public')->delete($relativePathOldImageUrl);
        }
        $team->save();
        return redirect()->route('admin.team');
    }
    public function delete($id){
        $team= Team::find($id);
        $team->delete();
        Alert::success('Success','Team deleted successfully');
        return redirect()->route('admin.team');


    }
}
