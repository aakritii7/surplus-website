@extends('admin.layout.adminLayout')
@section('content')


<div class="bg-yellow-50">
    <div class="ml-10 mr-10">
    <div class="flex justify-between mb-10 pt-10">
        <h1 class="text-2xl font-bold">Categories Management</h1>
        <a class="text-xl bg-black p-3 rounded-xl text-white " href="/admin/category/create">
            + Add Category
        </a>
    </div>

    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($categories as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="{{$item->imageUrl??'/images/default.png'}}" alt="">
                        </div>
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{$item->title}}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"> {{$item->description}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium flex">
                    <a href="{{route('admin.category.edit',$item->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <form id="deleteForm_{{$item->id}}" action="{{route('admin.category.delete',$item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="showDeleteModal({{$item->id}})" class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
</div>





<!-- delete confirmation modal -->

<!-- Main modal -->
<div id="deleteModal" tabindex="-1" aria-hidden="false" class="hidden overflow-y-auto overflow-x-hidden  fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-1/2  m-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
            <input type="hidden" id="deleteFormId">
            <div class="flex justify-center items-center space-x-4">
                <button onclick="closeDeleteModal()" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <button onclick="submitForm()" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Yes, I'm sure
                </button>
            </div>
        </div>
    </div>
</div>
 <!-- end of delete confirmation modal -->


 <script>
    function showDeleteModal($id)
    {
        event.preventDefault();
        var deleteModal=document.getElementById("deleteModal");
        var deleteFormId=document.getElementById('deleteFormId');
        deleteFormId.value=$id;
        deleteModal.classList.remove("hidden");
    }
    function closeDeleteModal()
    {
        var deleteModal=document.getElementById("deleteModal");
        deleteModal.classList.add("hidden");
    }

    function submitForm()
    {
        var deleteFormId=document.getElementById('deleteFormId');
        var id=deleteFormId.value;
        var deleteForm=document.getElementById(`deleteForm_${id}`);
        deleteForm.submit();
        closeDeleteModal();
    }
 </script>

@endsection