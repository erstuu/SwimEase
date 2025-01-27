<nav class="shadow-lg sticky lg:top-0 z-50 bg-primaryy">
    <div class="container mx-auto px-2 flex justify-between items-center py-2">
        <div class="flex items-center tracking-widest text-white">
            <a href="{{ url('/') }}" class="text-xl font-bold hidden md:flex px-1 p-">SwimEase</a>
        </div>
        <div class="lg:space-x-3 space-x-5 flex mt-2">
            <button id="menu-toggle" class="ml-3 text-white tracking-widest text-2xl lg:hidden px-2">
                <i class="fa-solid fa-bars"></i>
            </button>


            @if (!Auth::check())
            <div id="menu" class="hidden md:flex text-sky-950 text-lg font-bold space-x-4 pl-12">
                <a href="{{ url('/') }}"
                    class="py-2 px-5 font-medium {{ request()->is('/') ? 'border-b-2 bg-sky-800 rounded-full text-white shadow-lg' : 'hover:border-b-2 hover:border-sky-500 hover:rounded-full' }}">
                    Beranda
                </a>
                <a href="{{ url('/jadwals') }}"
                    class="py-2 px-5 font-medium {{ request()->is('jadwals') ? 'order-b-2 bg-sky-800 rounded-full text-white shadow-lg' : 'hover:border-b-2 hover:border-sky-500 hover:rounded-full' }}">
                    Jadwal
                </a>
                <a href="{{ url('/tentang') }}"
                    class="py-2 px-6 font-medium {{ request()->is('tentang') ? 'order-b-2 bg-sky-800 rounded-full text-white shadow-lg' : 'hover:border-b-2 hover:border-sky-500 hover:rounded-full' }}">
                    Tentang
                </a>
                <a href="{{ url('/kontak') }}"
                    class="py-2 px-5 font-medium {{ request()->is('kontak') ? 'order-b-2 bg-sky-800 rounded-full text-white shadow-lg' : 'hover:border-b-2 hover:border-sky-500 hover:rounded-full' }}">
                    Kontak
                </a>
            </div>
            <div class="hidden md:flex">
                <a href="/login"
                    class="bg-sky-900 pt-2 px-6 py-2 text-center text-md h-11 text-white shadow-xl rounded-full font-semibold">
                    Login
                </a>
            </div>
            @else
            <div class="hidden md:flex space-x-4">
                <a href="{{ url('/jadwals') }}"
                    class="bg-sky-900 pt-2 px-6 py-2 text-center text-md h-11 text-white shadow-xl rounded-full font-semibold">
                    Jadwal
                </a>
                <a href="/lesku"
                    class="bg-sky-900 pt-2 px-6 py-2 text-center text-md h-11 text-white shadow-xl rounded-full font-semibold">
                    Lesku
                </a>

                <form method="POST" action="{{ route('logout') }}" class="ml-4">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 py-2 px-6 text-center text-md h-11 text-white shadow-xl rounded-full font-semibold">
                        Logout
                    </button>
                </form>
            </div>
            @endif
        </div>
    </div>

    <div id="mobile-menu" class="hidden bg-slate-300 absolute top-full w-full left-0 py-4 text-black">
        <a href="{{ url('/') }}"
            class="block py-2 px-4 hover:bg-slate-400 {{ request()->is('/') ? 'bg-slate-400' : '' }}">Home</a>
        <a href="{{ url('/jadwals') }}"
            class="block py-2 px-4 hover:bg-slate-400 {{ request()->is('jadwals') ? 'bg-slate-400' : '' }}">Jadwal</a>
        <a href="{{ url('/lesku') }}"
            class="block py-2 px-4 hover:bg-slate-400 {{ request()->is('lesku') ? 'bg-slate-400' : '' }}">Lesku</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="block py-2 px-4 hover:bg-slate-400 {{ request()->is('logout') ? 'bg-slate-400' : '' }}">
                Logout
            </button>
        </form>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>