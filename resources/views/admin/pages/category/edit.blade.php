@extends('admin.layout.adminLayout')
@section('content')

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="/admin/category/update" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$category->id}}" name="id">
            <div class="mb-5">
                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                    Category Title
                </label>
                <input type="text" value="{{$category->title}}" name="title" id="title" placeholder="Category Title"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                @error('title')
                    <p class="text-red-600">* {{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                    Description
                </label>
                <textarea type="text" name="description" id="description" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{$category->description}}</textarea>
                @error('description')
                <p class="text-red-600">* {{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <img src="{{$category->imageUrl}}" alt="">
            </div>
            <div class="mb-5">
                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                    Image
                </label>
                <input type="file" name="image" id="image" placeholder="Image"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                @error('image')
                <p class="text-red-600">* {{$message}}</p>
                @enderror
            </div>

            <div>
                <button
                type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@endsection