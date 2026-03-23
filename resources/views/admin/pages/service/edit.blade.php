@extends('admin.layout.adminLayout')
@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{route('admin.service.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$service->id}}">
            <div class="mb-5">
                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">Title</label>
                <input type="title" value="{{$service->title}}" name="title" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                @error('title')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">Description</label>
                <textarea name="description" id="description" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{'$service->description'}}</textarea>
                @error('description')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                
                <img class="w-[100px] h-[100px]" src="{{$service->image}}" alt="">
                
            </div>
            <div class="mb-5">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                @error('image')
                <p class="text-red-500">{{$message}}</p>
                @enderror

            </div>
            <div>
                <button class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection