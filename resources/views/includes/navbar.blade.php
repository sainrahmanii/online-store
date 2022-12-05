<nav class="bg-white w-full shadow-lg fixed top-0 left-0 tight-0">
    <div class="max-w-6xl mx-auto py-3">
        <div class="flex justify-between items-center">
            <button class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 stroke-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <h2 class="font-bold text-2xl text-teal-500 pl-3">SHOPPING</h2>
            </button>

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
                     class="placeholder:text-slate-400 block bg-white w-96 border border-slate-300 rounded-full py-2 px-9 outline-teal-500">
                </div>
            </div>

            {{-- button sign-up and sign-in --}}
            <div class="flex items-center">
                <button class="bg-teal-300 text-white px-7 py-2 font-bold rounded-full hover:bg-teal-500">
                    SIGN IN
                </button>
                <button class="bg-teal-500 text-white px-7 py-2 font-bold rounded-full ml-2 hover:bg-teal-700">
                    SIGN UP
                </button>
            </div>
        </div>
    </div>
</nav>
