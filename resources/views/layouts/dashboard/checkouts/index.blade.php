@extends('master')

@section('title', 'Dashboard-products')

@section('content')

    <div class="max-w-6xl mx-auto mt-24">
        <h1 class="text-center text-2xl font-semibold">Dashboard Checkouts</h1>
        <div class="rounded-xl shadow-xl">
            <div
                class=" overflow-auto h-128 scrollbar scrollbar-w-2 scrollbar-thumb-rounded-lg scrollbar-track-rounded-lg scrollbar-thumb-emerald-500 scrollbar-track-emerald-200">
                <div class="px-5 py-5">
                    <table class="w-full">
                        <thead class="bg-slate-200">
                            <tr>
                                <th>No.</th>
                                <th>No Pemesenan</th>
                                <th>Nama Pembeli</th>
                                <th>Nama Produk</th>
                                <th>Harga Produk</th>
                                <th>Status</th>
                                <th>Gambar Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <a href="{{ route('dashboard.update.status') }}">
                                        <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </button>
                                    </a>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    {{-- <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span> --}}
                                    <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    {{-- <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    {{-- <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span> --}}
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span> --}}
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span>
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td>349084809</td>
                                <td>Kang Khanif</td>
                                <td>Tas Gunung</td>
                                <td>Rp 1.500.000</td>
                                <td>
                                    <span class="px-2 bg-emerald-500 rounded-full font-semibold text-white">SUCCESS</span>
                                    {{-- <span class="px-2 bg-yellow-500 rounded-full font-semibold text-white">PENDING</span>
                                    <span class="px-2 bg-red-500 rounded-full font-semibold text-white">FAILED</span> --}}
                                </td>
                                <td><img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png"
                                        alt="" class="w-20 mx-auto"></td>
                                <td class="flex justify-center gap-2">
                                    <button class="bg-emerald-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 px-2 py-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
