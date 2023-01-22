@extends('master')

@section('title', 'Dashboard-edit-product')

@section('content')

    <div class="max-w-6xl mx-auto mt-24">
        <h1 class="text-center text-2xl font-semibold">Dashboard Edit Product</h1>
        <div class="mx-56 rounded-xl shadow-xl">
            <div class="p-7">
                <div class="block">
                    <span class="block text-sm font-medium text-slate-700">Kategori</span>
                    <select name="available" class="input-field w-full px-5 py-2 my-2 border rounded-full outline-none">
                        <option value="1" selected>Fashion</option>
                        <option value="0">Fruit</option>
                    </select>
                    <input type="text" name="" id="" class="w-full px-5 py-2 mt-2 border rounded-full outline-none" placeholder="Nama Produk">
                    <input type="number" name="" id="" class="w-full px-5 py-2 mt-2 border rounded-full outline-none" placeholder="Harga Produk">
                    <input type="text" name="" id="" class="w-full px-5 py-2 mt-2 border rounded-full outline-none" placeholder="Deskripsi Produk">
                    <input type="file" name="" id="" class="w-full px-5 py-2 mt-2 border rounded-full outline-none file:bg-emerald-400 file:rounded-full file:outline-none" placeholder="Gambar Produk">
                </div>
                <div class="flex justify-end">
                    <a href="">
                        <button class="bg-emerald-500 px-7 py-2 rounded-full mt-5 font-semibold text-white">UPDATE</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
