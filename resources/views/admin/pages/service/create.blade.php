@extends('admin.layout.adminLayout')
@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-xl font-semibold mb-3">
                <label for="title">Title</label>
                <input name="title" id="title" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="text" placeholder="Add your description">
                @error('title')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="text-xl font-semibold mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="text" placeholder="Add your description"></textarea>
                @error('description')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="text-xl font-semibold mb-3">
                <label for="Image">Image</label>
                <input type="file" id="image" name="image">
                @error('image')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div>
                <button
                    type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection