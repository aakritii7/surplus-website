<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(2);
        return view('admin.pages.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'description' => 'required',
            'image'=>'required|image'
        ]);
        $title = $request->title;
        $description = $request->description;
        $path=$request->file('image')->store("uploads","public");
        $url=Storage::url($path);

        $category = Category::create([
            'title' => $title,
            'description' => $description,
            'imageUrl'=>$url,
        ]);
        dd($url);
        Alert::success('Success', 'Category Created Successfully');
        return redirect()->route('admin.category');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'description' => 'required',
            'image'=>'nullable|image'
        ]);
        
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $category = Category::find($id);
        $category->title = $title;
        $category->description = $description;
        if($request->hasFile('image'))
        {
            $path=$request->file('image')->store("uploads","public");
            $oldImageUrl=$category->imageUrl;
            $relativePathOldImageUrl = str_replace('/storage/', '', $oldImageUrl);
            $category->imageUrl=Storage::url($path);
            Storage::disk('public')->delete($relativePathOldImageUrl);

        }
        $category->save();
        Alert::success('Success', 'Category Updated Successfully');
        return redirect()->route('admin.category');
    }
    public function view()
    {
        return view('admin.pages.category.view');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        Alert::success('Success', 'Category Deleted Successfully');
        return redirect()->route('admin.category');
    }
}
