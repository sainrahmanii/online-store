@extends('master')
@section('title', 'Dashboard')

@section('content')

    <div class="max-w-6xl mx-auto mt-24">

        <div class="grid grid-cols-2 gap-12">
            <div class="rounded-xl shadow-xl">
                <a href="{{ route('dashboard.products') }}">
                    <div class="px-5 py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-24 h-24 stroke-emerald-300 mx-auto mb-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                        </svg>
                        <h2 class="text-center font-semibold text-2xl">Products</h2>
                    </div>
                </a>
            </div>
            <div class="rounded-xl shadow-xl">
                <a href="{{ route('dashboard.checkouts') }}">
                    <div class="px-5 py-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-24 h-24 stroke-emerald-300 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>

                        <h2 class="text-center font-semibold text-2xl">Checkouts</h2>
                    </div>
                </a>
            </div>
        </div>

    </div>

@endsection
