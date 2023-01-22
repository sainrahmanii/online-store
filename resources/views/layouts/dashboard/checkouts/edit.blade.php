@extends('master')

@section('title', 'Dashboard-edit-status')

@section('content')

    <div class="max-w-6xl mx-auto mt-24">
        <h1 class="text-center text-2xl font-semibold">Dashboard Edit Status</h1>
        <div class="mx-56 rounded-xl shadow-xl">
            <div class="p-7">
                <div class="block">
                    <span class="block text-sm font-medium text-slate-700">Update Status</span>
                    <select name="available" class="input-field w-full px-5 py-2 my-2 border rounded-full outline-none">
                        <option value="SUCCESS" selected>SUCCESS</option>
                        <option value="PENDING">PENDING</option>
                        <option value="FAILED">FAILED</option>
                    </select>
                    <input type="text" name="" id="" disabled class="w-full px-5 py-2 mt-2 border rounded-full outline-none" value="Fashion">
                    <input type="text" name="" id="" disabled class="w-full px-5 py-2 mt-2 border rounded-full outline-none" value="Ransel Pria">
                    <input type="text" name="" id="" disabled class="w-full px-5 py-2 mt-2 border rounded-full outline-none" value="Rp 15.000.000">
                    <input type="text" name="" id="" disabled class="w-full px-5 py-2 mt-2 border rounded-full outline-none" value="Recomended">

                    <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" class="rounded-lg w-32 mt-5" alt="">
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
