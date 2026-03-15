@extends('admin.layout.adminLayout')
@section('content')


<div class="bg-yellow-50">
    <div class="ml-10 mr-10">
        <div class="flex justify-between mb-10 pt-10">
            <h1 class="text-2xl font-bold">Course Management</h1>
            <a class="text-xl bg-black p-3 rounded-xl text-white " href="/admin/course/create">
                + Add Course
            </a>
        </div>
        <table class="w-full">
            <thead class="border w-full">

                <tr class="flex justify-around w-full">
                    <th>SN</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="border w-full">
                @php
                    $index=1;
                @endphp
                @foreach ($courses as $item)
                <tr class="flex justify-around w-full">
                    <td>{{$index}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->image}}</td>
                    <td class="flex gap-2 pt-2 pb-2">
                        <a href="/admin/course/edit" class="border border-green-500 bg-green-300 text-green-800 px-2"><i class="ri-edit-line"></i></a>
                        <button class="border border-red-500 bg-red-300 text-red-800 px-2"><i class="ri-delete-bin-5-line"></i></button>
                    </td>
                </tr>
                @php
                    $index++;
                @endphp
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection