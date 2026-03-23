@extends('admin.layout.adminLayout')
@section('content')
<div class="flex items-center justify-center p-12">
    <div>
        <form action="{{route('admin.testimonial.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-xl font-semibold mb-3">
                <label for="client">Client Name</label>
                <input name="client" id="client" value="{{old('client')}}" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="text" placeholder="Add your description">
                @error('client')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="text-xl font-semibold mb-3">
                <label for="rating">Rating</label>
                <input name="rating" id="rating" value="{{old('rating')}}" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="text" placeholder="Add your description">
                @error('rating')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="text-xl font-semibold mb-3">
                <label for="image">Image</label>
                <input name="image" id="image" value="{{old('image')}}" class="border p-1 rounded-xl font-normal text-sm text-gray-900" type="file" placeholder="Add your description">
                @error('image')
                <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="bg-blue-500 text-white rounded-2xl p-3 w-25 text-center mt-5">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>

@endsection