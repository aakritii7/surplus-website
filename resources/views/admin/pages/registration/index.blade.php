@extends('admin.layout.adminLayout')
@section('content')


<div class="bg-yellow-50">
    <div class="ml-10 mr-10">
        <div class="flex justify-between mb-10 pt-10">
            <h1 class="text-2xl font-bold">Registration Management</h1>
            <a class="text-xl bg-black p-3 rounded-xl text-white " href="">
                + Add Registration
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
                
                <tr class="flex justify-around w-full">
                    <td>1</td>
                    <td>abc</td>
                    <td>abc</td>
                    <td class="flex gap-2 pt-2 pb-2">
                        <a href="" class="border border-green-500 bg-green-300 text-green-800 px-2"><i class="ri-edit-line"></i></a>
                        <button class="border border-red-500 bg-red-300 text-red-800 px-2"><i class="ri-delete-bin-5-line"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection