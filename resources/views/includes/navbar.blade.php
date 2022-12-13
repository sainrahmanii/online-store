<nav class="fixed top-0 left-0 z-10 w-full bg-white shadow-lg tight-0">
    <div class="max-w-6xl py-3 mx-auto">
        <div class="flex items-center justify-between">
            <a href="/">
                <button class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 stroke-teal-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <h2 class="pl-3 text-2xl font-bold text-teal-500">SHOPPING</h2>
                </button>
            </a>

            {{-- search --}}
            <div class="md:flex">
                <div class="relative block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 stroke-slate-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search for anything..."
                     class="block py-2 bg-white border rounded-full placeholder:text-slate-400 w-96 border-slate-300 px-9 outline-teal-500">
                </div>
            </div>

            {{-- button sign-up and sign-in --}}
            <div class="flex items-center">
                {{-- <a href="/login">
                    <button class="py-2 font-bold text-white bg-teal-300 rounded-full px-7 hover:bg-teal-500">
                        SIGN IN
                    </button>
                </a>
                <a href="/register">
                    <button class="py-2 ml-2 font-bold text-white bg-teal-500 rounded-full px-7 hover:bg-teal-700">
                        SIGN UP
                    </button>
                </a> --}}
                <div class="border-r-2 border-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mx-3 fill-slate-400">
                        <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                    </svg>
                </div>
                <img src="{{ asset('assets/sain.png') }}" alt="" class="w-12 ml-4">
            </div>
        </div>
    </div>
</nav>
