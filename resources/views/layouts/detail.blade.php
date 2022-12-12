@extends('master')

@section('title', 'Online - Store')

@section('content')

<div class="max-w-6xl mx-auto mt-28">
    <div class="mb-3">
        <h1 class="font-bold text-3xl">Tas Gunung</h1>
        <p class="text-slate-500">Kualitas terbaik</p>
    </div>
    <div class="grid grid-cols-3 gap-5">
        <div class="col-span-2">
            <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl">
            <div class="grid grid-cols-4 gap-4 my-5">
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl cursor-pointer">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl cursor-pointer">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl cursor-pointer">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl cursor-pointer">
                </div>
            </div>
            <div class="my-2">
                <div class="description">
                    <h2 class="font-bold text-2xl">Detail Produk</h2>
                    <div class="my-2">
                        <p class="text-slate-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas veniam reprehenderit alias id, vero quae deserunt, dignissimos doloribus sint ipsum voluptates esse, ducimus praesentium nihil quo recusandae illum inventore beatae maxime velit laborum. Numquam cum, maiores adipisci assumenda nihil modi. Suscipit ab ipsam nam corporis amet ad exercitationem rem, explicabo dolorem vitae ea delectus, fugiat neque aperiam obcaecati? Vitae facilis tempora mollitia nulla optio reiciendis! Reprehenderit facilis nihil pariatur eaque laborum minus architecto. Fugiat reprehenderit ullam, itaque possimus nam dolores a, expedita ab beatae exercitationem molestias molestiae aliquid deserunt illo perspiciatis ducimus vitae odit debitis mollitia veniam voluptatibus aliquam deleniti.</p>
                    </div>
                </div>
                <div class="rating">
                    <h2 class="font-bold text-2xl">Rating Produk</h2>
                    <div class="flex items-center">
                        <img src="{{ asset('assets/sain.png') }}" alt="" class="w-10">
                        <p class="pl-2">Husain Rahmani</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="border rounded-2xl p-5">
                <h2 class="font-bold text-center text-2xl">Tas Gunung</h2>
                <div class="mt-5">
                    <div class="flex items-center justify-between">
                        <h2>Harga :</h2>
                        <h2 class="font-bold">Rp 250.000</h2>
                    </div>
                    <div class="flex items-center justify-between">
                        <h2>Pengiriman :</h2>
                        <h2 class="font-bold">Kab. Bogor</h2>
                    </div>
                    <div class="flex items-center justify-between mt-1">
                        <h2>Tambah Pesanan :</h2>
                        <div class="flex items-center justify-between rounded-full outline outline-emerald-300">
                            <div class="px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                  </svg>
                            </div>
                            <h3 class="font-bold">12</h3>
                            <div class="px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                  </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="outline outline-emerald-300 rounded-full w-full py-2 font-bold mt-3">+ Keranjang</button>
                <button class="bg-emerald-500 rounded-full w-full py-2 text-white font-bold mt-3">Checkout Now</button>
            </div>
        </div>
    </div>
</div>

@endsection
