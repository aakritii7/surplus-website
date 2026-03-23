@extends('admin.layout.adminLayout')
@section('content')
<div class="bg-green-100 h-screen pl-80 pt-10">
    
    <form action="{{route('admin.team.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="text-xl font-semibold mb-3">
        <label for="teamName">Team Name</label>
        <input name="teamName" id="teamName" value="{{old('teamName')}}" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="text" placeholder="Add your description">
        @error('teamName')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div class="text-xl font-semibold mb-3">
        <label for="title">Team Position</label>
        <select name="position" id="position" value="{{old('position')}}">
            <option value="higher">Higher</option>
            <option value="middle">Middle</option>
            <option value="lower">Lower</option>
        </select>
        @error('position')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </div>
    <div class="text-xl font-semibold">
        <label for="image">Image</label>
        <input name="image" id="image" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="file">
        @error('image')
        <p class="text-red-500">{{$message}}</p>
        @enderror
        
    </div>
    <div class="bg-blue-500 text-white rounded-2xl p-3 w-25 text-center mt-5">
        <button type="submit">Submit</button>
    </div>
    </form>
    
</div>

@endsection