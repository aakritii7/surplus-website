@extends('admin.layout.adminLayout')
@section('content')

<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form action="/admin/course/update" method="POST">
            @csrf
            <input type="hidden" value="{{$course->id}}"  name="id">
            <div class="mb-5">
                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                    Course Title
                </label>
                <input type="text" value="{{$course->title}}" name="title" id="title" placeholder="Category Title"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @error('title')
                    <p class="text-red-500">*{{$message}}</p>
                        
                    @enderror
            </div>

            <div class="mb-5">
                <label for="image" class="mb-3 block text-base font-medium text-[#07074D]">
                    Image
                </label>
                <input type="file" name="image" id="image">
                @error('image')
                <p class="text-red-500">*{{$message}}</p>
                    
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