@extends('admin.layout.adminLayout')
@section('content')

<div class="bg-yellow-50">
    <div class="ml-10 mr-10">
        <div class="flex justify-between mb-10 pt-10">
            <h1 class="text-2xl font-bold">Team Management</h1>
            <a class="text-xl bg-black p-3 rounded-xl text-white " href="{{route('admin.team.create')}}">
                + Add Team
            </a>
        </div>
        <table class="w-full">
            <thead class="border w-full">

                <tr class="flex justify-around w-full">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="border w-full">
                @php
                    $index=1;
                @endphp
                @foreach ($teams as $item)
                <tr class="flex justify-around w-full">
                    <td>{{ ($courses->currentPage() - 1) * $courses->perPage() + $loop->iteration }}</td>
                    <td>{{$item->teamName}}</td>
                    <td>{{$item->position}}</td>
                    <td class="flex gap-2 pt-2 pb-2">
                        <a href="" class="border border-green-500 bg-green-300 text-green-800 px-2"><i class="ri-edit-line"></i></a>
                        <form action="" method="post">
                            @csrf
                            <button class="border border-red-500 bg-red-300 text-red-800 px-2"><i class="ri-delete-bin-5-line"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>

</div>

@endsection