@extends('master')

@section('title', 'Online - Store')

@section('content')

<div class="max-w-6xl mx-auto mt-28">
    <div class="mb-3">
        <h1 class="text-3xl font-bold">Tas Gunung</h1>
        <p class="text-slate-500">Kualitas terbaik</p>
    </div>
    <div class="grid grid-cols-3 gap-5">
        <div class="col-span-2">
            <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl">
            <div class="grid grid-cols-4 gap-4 my-5">
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="cursor-pointer rounded-2xl">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="cursor-pointer rounded-2xl">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="cursor-pointer rounded-2xl">
                </div>
                <div class="h-40">
                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="cursor-pointer rounded-2xl">
                </div>
            </div>
            <div class="my-2">
                <div class="description">
                    <h2 class="text-2xl font-bold">Detail Produk</h2>
                    <div class="my-2">
                        <p class="text-slate-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas veniam reprehenderit alias id, vero quae deserunt, dignissimos doloribus sint ipsum voluptates esse, ducimus praesentium nihil quo recusandae illum inventore beatae maxime velit laborum. Numquam cum, maiores adipisci assumenda nihil modi. Suscipit ab ipsam nam corporis amet ad exercitationem rem, explicabo dolorem vitae ea delectus, fugiat neque aperiam obcaecati? Vitae facilis tempora mollitia nulla optio reiciendis! Reprehenderit facilis nihil pariatur eaque laborum minus architecto. Fugiat reprehenderit ullam, itaque possimus nam dolores a, expedita ab beatae exercitationem molestias molestiae aliquid deserunt illo perspiciatis ducimus vitae odit debitis mollitia veniam voluptatibus aliquam deleniti.</p>
                    </div>
                </div>
                <div class="mt-5 rating">
                    <h2 class="text-2xl font-bold">Rating Produk</h2>
                    <div class="rating-product">
                        <div class="flex items-center justify-between mt-5">
                            <div class="flex items-center">
                                <img src="{{ asset('assets/sain.png') }}" alt="" class="w-10">
                                <p class="pl-2">Husain Rahmani</p>
                            </div>
                            <div class="flex items-center persentase-rating">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <hr>
                            </div>
                        </div>
                        <div class="mt-3 keterangan">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid reprehenderit consequatur corporis quo rem omnis necessitatibus labore, numquam obcaecati qui nemo fuga at esse doloribus ex magnam inventore quas non molestiae facilis quaerat! Tempora praesentium, magni eaque omnis quam aliquam minus dolor optio earum voluptatum laborum consequuntur, delectus nisi debitis.</p>
                        </div>
                        <hr class="mt-2">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="p-5 border rounded-2xl">
                <h2 class="text-2xl font-bold text-center">Tas Gunung</h2>
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
                <button class="w-full py-2 mt-3 font-bold rounded-full outline outline-emerald-300">+ Keranjang</button>
                <a href="/checkout-product">
                    <button class="w-full py-2 mt-3 font-bold text-white rounded-full bg-emerald-500">Checkout Now</button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
