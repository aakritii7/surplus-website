@extends('admin.layout.adminLayout')
@section('content')
<div class="bg-yellow-50 py-10">
    <div class="ml-10 mr-10">
        <h1 class="text-3xl font-bold py-5">Site Configuration</h1>

        <!-- General Information -->
        <form class="flex flex-col gap-10" action="{{route('admin.setting.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="border border-gray-200 py-5 px-5 rounded-xl mr-96 bg-white">
                <div>
                    <h1 class="text-xl font-medium pb-5">General Information</h1>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-10">
                        <div class="flex flex-col">
                            <label for="siteName" class="text-gray-400 uppercase font-bold">Site Name</label>
                            <input class="rounded-xl" type="text" name="siteName" id="siteName" value="{{$setting->siteName??''}}">
                            @error('siteName')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="contactEmail" class="text-gray-400 uppercase font-bold">Contact Email</label>
                            <input class="rounded-xl" type="text" name="contactEmail" id="contactEmail" value="{{$setting->contactEmail??''}}">
                            @error('contactEmail')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="contactPhone" class="text-gray-400 uppercase font-bold">Contact Phone</label>
                            <input class="rounded-xl" type="text" name="contactPhone" id="contactPhone" value="{{$setting->contactPhone??''}}">
                            @error('contactPhone')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="officeAddress" class="text-gray-400 uppercase font-bold">Office Address</label>
                            <input class="rounded-xl" type="text" name="officeAddress" id="officeAddress" value="{{$setting->officeAddress??''}}">
                            @error('officeAddress')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                    </div>

                </div>


            </div>
            <!-- Hero Section -->

            <div class="border border-gray-200 py-5 px-5 rounded-xl mr-96 bg-white">
                <div>
                    <h1 class="text-xl font-medium pb-5">General Information</h1>
                </div>
                <div>
                    <div class="flex flex-col gap-10">
                        <div class="flex flex-col">
                            <label for="title" class="text-gray-400 uppercase font-bold">Hero Title</label>
                            <input class="rounded-xl" type="text" name="title" id="title" value="{{$setting->title??''}}">
                            @error('title')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="subtitle" class="text-gray-400 uppercase font-bold">Hero Subtitle</label>
                            <textarea class="rounded-xl" type="text" name="subtitle" id="subtitle"></textarea>
                            @error('subtitle')
                            <p class="text-red-500">{{$message}}</p>
                                
                            @enderror
                        </div>
                    </div>

                </div>


            </div>
             
            
            <div class="">
                <button class="bg-black text-white text-center text-2xl py-2 px-3 rounded-lg" type="submit">Save Changes</button>
            </div>
        </form>

    </div>
</div>

@endsection