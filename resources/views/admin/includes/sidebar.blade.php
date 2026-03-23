<!-- leftSideBar -->
<section class="py-10 px-10 w-[300px] h-screen fixed border-r border-gray-300">

    <div class="flex items-center gap-2">
        <div class="bg-black text-white rounded-2xl text-2xl p-3">
            <i class="ri-store-3-fill"></i>
        </div>
        <div>
            <h1 class="text-2xl font-bold">Surplus</h1>
            <h1 class="text-2xl text-gray-500">ADMIN</h1>
        </div>
    </div>

    <div class="py-10">
        <ul class="flex flex-col gap-5">
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.dashboard')}}" class="flex justify-between items-center py-2 px-4  text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-dashboard-horizontal-line"></i></span>
                        <h1>Dashboard</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.category')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-list-check"></i></span>
                        <h1>Categories</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.course')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-book-open-line"></i></span>
                        <h1>Courses</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.registration')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-user-follow-line"></i></i></span>
                        <h1>Registrations</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.team')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-group-line"></i></span>
                        <h1>Teams</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.service')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-briefcase-3-line"></i></span>
                        <h1>Services</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.testimonial')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-chat-4-line"></i></span>
                        <h1>Testimonials</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <a href="{{route('admin.setting')}}" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                    <div class="flex gap-5">
                        <span><i class="ri-settings-2-line"></i></span>
                        <h1>Setting</h1>
                    </div>
                    <div class="">
                        <span><i class="ri-arrow-drop-right-line"></i></span>
                    </div>
                </a>
            </li>
            <li class="border border-gray-300 rounded-2xl mt-10 hover:bg-gray-200 transition-all duration-1000 ease-in-out">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="flex justify-between items-center py-2 px-4 text-lg text-gray-600 font-medium gap-5">
                        <div class="flex gap-5">
                            <span><i class="ri-logout-box-line"></i></span>
                            <h1>Sign Out</h1>
                        </div>

                    </button>
                </form>

            </li>

        </ul>
    </div>
</section>