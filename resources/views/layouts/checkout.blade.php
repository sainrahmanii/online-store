@extends('master')

@section('title', 'Online - Store')

@section('content')

<div class="max-w-6xl mx-auto mt-24">
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="rounded-2xl">
        </div>
        <div>
            <div class="p-5 border rounded-xl">
                <h2 class="text-2xl font-bold text-center">Tas Gunung</h2>
                <div class="mt-5">
                    <input type="text" name="" id="" class="w-full px-5 py-2 my-2 border rounded-full outline-none" placeholder="Nama Lengkap">
                    <input type="text" name="" id="" class="w-full px-5 py-2 my-2 border rounded-full outline-none" placeholder="Nomor Telphone">
                    <input type="text" name="" id="" class="w-full px-5 py-2 my-2 border rounded-full outline-none" placeholder="Pesan">
                    <input type="text" name="" id="" class="w-full px-5 py-2 mt-2 border rounded-full outline-none" placeholder="Alamat">
                    <div class="flex items-center justify-between my-5">
                        <h2>Tambah Pesanan :</h2>
                        <div class="flex items-center justify-between rounded-full outline outline-emerald-300">
                            <div class="px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                  </svg>
                            </div>
                            <h3 class="font-bold">12</h3>
                            <div class="px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                  </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end my-5">

                        <div>
                            <p class="text-3xl font-bold">Rp 250.000</p>
                        </div>
                    </div>
                </div>
                <a href="/success-checkout">
                    <button class="w-full py-2 font-bold text-white rounded-full bg-emerald-500">Pay Now</button>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
