@extends('admin.layout.adminLayout')
@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="/admin/team/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$team->id}}">
            <div class="mb-5">
                <label for="teamName" class="mb-3 block text-base font-medium text-[#07074D]">Name</label>
                <input type="teamName" value="{{$team->teamName}}" name="teamName" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                @error('teamName')
                <p class="text-red-500">{{$message}}</p>
                    
                @enderror
            </div>
            <div class="mb-5">
                <label for="position" class="mb-3 block text-base font-medium text-[#07074D]">Position</label>
                <select name="position" id="position" value="{{$team->position}}">
                    <option value="higher">Higher</option>
                    <option value="middle">Middle</option>
                    <option value="lower">Lower</option>
                </select>
                @error('position')
                <p class="text-red-500">{{'message'}}</p>
                    
                @enderror
            </div>
            <div class="mb-5">
                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">Image</label>
                <img class="w-[100px] h-[100px] object-cover" src="{{$team->image}}" alt="">
                @error('image')
                <p class="text-red-500">{{'$message'}}</p>
                    
                @enderror
            </div>
            <div>
                <button type="submit" class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">Save</button>
            </div>

        </form>
    </div>
</div>
@endsection