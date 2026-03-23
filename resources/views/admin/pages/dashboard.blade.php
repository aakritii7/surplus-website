@extends('admin.layout.adminLayout')
@section('content')


<!-- RightSideBar -->
<section class="py-5 bg-yellow-50">
    <!-- <div class="flex justify-between px-10">
        <div>
            <span><i class="ri-menu-line"></i></span>
        </div>
        <div class="flex gap-1 item-center pb-5">
            <div class="">
                <h1 class="font-semibold text-base/5">Admin User</h1>
                <h1 class="font-medium text-xs text-gray-600">SUPER ADMIN</h1>
            </div>
            <div class="text-3xl">
                <span><i class="ri-user-smile-line"></i></span>
            </div>

        </div>
    </div> -->
    <!-- <div>
        <hr class="text-gray-300">
    </div> -->
    <div class=" my-5 mx-10  py-5 px-15">
        <div>
            <h1 class="text-3xl font-bold pb-2">Dashboard Overview</h1>
            <p class="text-lg text-gray-500">Welcome back! Here's what's happening with Surplus today.</p>
        </div>
        <div class="grid grid-cols-4 py-10 gap-5">
            <div class=" bg-white rounded-2xl py-5 px-5 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-2xl bg-gray-50 py-1 px-2 rounded-xl"><i class="ri-book-open-line"></i></span>
                    <h1 class="text-green-700 bg-green-100 p-1 rounded-xl text-sm">+2 this month</h1>
                </div>
                <div class="text-2xl pb-2 pt-2 font-semibold">
                    <h1>0</h1>
                </div>
                <div class="text-base font-medium text-gray-600">
                    <h1>TOTAL COURSES</h1>
                </div>
            </div>
            <div class=" bg-white rounded-2xl py-5 px-5 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-2xl bg-gray-50 py-1 px-2 rounded-xl"><i class="ri-user-follow-line"></i></span>
                    <h1 class="text-green-700 bg-green-100 p-1 rounded-xl text-sm">+12% vs last month</h1>
                </div>
                <div class="text-2xl pb-2 pt-2 font-semibold">
                    <h1>0</h1>
                </div>
                <div class="text-base font-medium text-gray-600">
                    <h1>Total Registrations</h1>
                </div>
            </div>
            <div class=" bg-white rounded-2xl py-5 px-5 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-2xl bg-gray-50 py-1 px-2 rounded-xl"><i class="ri-time-line"></i></span>
                </div>
                <div class="text-2xl pb-2 pt-2 font-semibold">
                    <h1>0</h1>
                </div>
                <div class="text-base font-medium text-gray-600">
                    <h1>Pending Approval</h1>
                </div>
            </div>
            <div class=" bg-white rounded-2xl py-5 px-5 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-2xl bg-gray-50 py-1 px-2 rounded-xl"><i class="ri-group-line"></i></span>
                </div>
                <div class="text-2xl pb-2 pt-2 font-semibold">
                    <h1>0</h1>
                </div>
                <div class="text-base font-medium text-gray-600">
                    <h1>Team Members</h1>
                </div>
            </div>
        </div>
        <div class="flex gap-5">
            <div class="w-[60%] border border-gray-200 rounded-2xl shadow-sm py-5 px-5 bg-white">
                <div class="flex justify-between font-medium text-base">
                    <h1>Recent Registrations</h1>
                    <h1>View All</h1>
                </div>
                <div class="text-gray-500 font-medium grid grid-cols-3 py-5">
                    <h1 class="text-xs">STUDENT</h1>
                    <h1 class="text-xs">COURSE</h1>
                    <h1 class="text-xs">STATUS</h1>
                </div>
                <div class="bg-gray-100 h-0.5"></div>
            </div>
            <div class="border border-gray-200 rounded-2xl shadow-sm py-5 px-5 bg-white">
                <div class="font-medium text-base">
                    <h1>Qucik Actions</h1>
                </div>
                <div class="py-5">
                    <a href="" class="flex items-center rounded-xl border border-gray-200 pr-52">
                        <span class="text-2xl rounded-xl py-1 px-2 ml-2 text-white bg-black">
                            <i class="ri-add-line"></i>
                        </span>
                        <div class="px-2 py-3">
                            <h1 class="font-bold text-sm/3">Add Course</h1>
                            <h1 class="text-gray-500 text-xs font-medium">Create a new offering</h1>

                        </div>
                    </a>
                    <a href="" class="flex mt-5 items-center rounded-xl border border-gray-200 pr-52">
                        <span class="text-2xl rounded-xl py-1 px-2 ml-2 text-white bg-black">
                            <i class="ri-settings-2-line"></i>
                        </span>
                        <div class="px-2 py-3">
                            <h1 class="font-bold text-sm/3">Site Settings</h1>
                            <h1 class="text-gray-500 text-xs font-medium">Update contact info</h1>

                        </div>
                    </a>


                </div>

            </div>
        </div>
    </div>


</section>
@endsection