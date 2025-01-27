<div id="sidebar"
    class="bg-primaryy text-white shadow-lg fixed lg:relative h-screen z-50 transition-all duration-300 w-64 font-medium lg:block hidden">
    <div class="flex flex-col h-full">
        <div class="px-14 flex items-center justify-center bg-sky-800">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-3/4 cursor-pointer" onclick="toggleSidebar()">
        </div>
        <ul class="menu flex-1 px-4 py-5 space-y-3">
            <li class="{{ request()->is('swim') ? 'bg-sky-900 rounded-lg shadow-lg' : '' }}">
                <a class="flex items-center gap-4 px-4 py-3 hover:bg-sky-700 rounded-lg transition" href="/swim">
                    <i class="fa-solid fa-house text-xl"></i>
                    <span class="text-lg">Home</span>
                </a>
            </li>
            <li class="{{ request()->is('users') ? 'bg-sky-900 rounded-lg shadow-lg' : '' }}">
                <a class="flex items-center gap-4 px-4 py-3 hover:bg-sky-700 rounded-lg transition" href="/users">
                    <i class="fa-solid fa-film text-xl"></i>
                    <span class="text-lg">Users</span>
                </a>
            </li>
            <li class="{{ request()->is('jadwal') ? 'bg-sky-900 rounded-lg shadow-lg' : '' }}">
                <a class="flex items-center gap-4 px-4 py-3 hover:bg-sky-700 rounded-lg transition" href="/jadwal">
                    <i class="fa-solid fa-calendar text-xl"></i>
                    <span class="text-lg">Jadwal</span>
                </a>
            </li>
            <li class="{{ request()->is('swimming') ? 'bg-sky-900 rounded-lg shadow-lg' : '' }}">
                <a class="flex items-center gap-4 px-4 py-3 hover:bg-sky-700 rounded-lg transition" href="/swimming">
                    <i class="fa-solid fa-swimmer text-xl"></i>
                    <span class="text-lg">Swimming</span>
                </a>
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <div class="px-4 py-5 bg-sky-800">
                <button class="w-full py-2 text-sm text-center transition rounded-lg bg-sky-900 hover:bg-sky-700">
                    Logout
                </button>
            </div>
        </form>
    </div>
</div>