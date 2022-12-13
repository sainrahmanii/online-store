@extends('master')

@section('title', 'Online - Store')

@section('content')

<div class="max-w-6xl mx-auto mt-24">

    <div id="carouselExampleIndicators" class="relative carousel slide" data-bs-ride="carousel">
        <div class="absolute bottom-0 left-0 right-0 flex justify-center p-0 mb-4 carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="relative w-full overflow-hidden carousel-inner">
          <div class="float-left w-full carousel-item active">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
              class="block w-full rounded-lg"
              alt="Wild Landscape"
            />
          </div>
          <div class="float-left w-full carousel-item">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
              class="block w-full rounded-lg"
              alt="Camera"
            />
          </div>
          <div class="float-left w-full carousel-item">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
              class="block w-full rounded-lg"
              alt="Exotic Fruits"
            />
          </div>
        </div>
        <button
          class="absolute top-0 bottom-0 left-0 flex items-center justify-center p-0 text-center border-0 carousel-control-prev hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="inline-block bg-no-repeat carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="absolute top-0 bottom-0 right-0 flex items-center justify-center p-0 text-center border-0 carousel-control-next hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="inline-block bg-no-repeat carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="grid grid-cols-4 gap-2 my-5">
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="{{ route('detail.product') }}">
        <div class="border rounded-lg shadow-lg cursor-pointer bg-base-100">
          <img src="https://www.superlive.id/storage/articles/c46b2b68-7fa0-4384-8b86-f886cbea3f21.png" alt="" class="w-full rounded-t-lg">
          <div class="p-2">
            <h2 class="text-gray-500">Tas Gunung</h2>
            <h2 class="font-bold">Rp 250.000</h2>
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              <p class="pl-2">Kab. Bogor</p>
            </div>
          </div>
        </div>
      </a>
    </div>
</div>

@endsection
