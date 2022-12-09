@extends('masterauth')
@section('title', 'Login')

@section('content')

    <div class="my-12">
        <a href="/">
            <button class="flex items-center justify-center mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-20 h-20 stroke-teal-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                <h2 class="pl-3 text-5xl font-bold text-teal-500">SHOPPING</h2>
            </button>
        </a>

        <div class="w-2/5 mx-auto mt-5 shadow-xl bg-base-100 rounded-xl">
            <div class="p-7">
                <h2 class="text-3xl font-bold text-center">SIGN IN</h2>
                <form action="users/register" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="w-full px-5 py-2 mt-2 border rounded-full focus:outline-none"
                        placeholder="Email">
                    <input type="password" class="w-full px-5 py-2 mt-2 border rounded-full focus:outline-none"
                        placeholder="Password">
                    <button class="w-full py-2 mt-5 font-bold text-white rounded-full bg-emerald-500">SIGN IN</button>
                </form>

                <a href="{{ route('auth.google') }}">
                    <button class="w-full mt-5 rounded-full bg-emerald-400 hover:text-white hover:bg-emerald-500">
                        <div class="flex items-center justify-center py-2">
                            <img src="{{ asset('assets/google.svg') }}" class="w-5" alt="">
                            <h2 class="pl-2 text-sm font-bold">SIGN IN WITH GOOGLE</h2>
                        </div>
                    </button>
                </a>

                <h2 class="mt-3 font-semibold text-center">Don't Have an Account? <a href="/register"
                        class="text-blue-300 hover:text-blue-500 underline-none hover:underline">Sign up</a></h2>
            </div>
        </div>
    </div>

@endsection
