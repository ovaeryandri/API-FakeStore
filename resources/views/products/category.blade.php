<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  @vite('resources/css/app.css')

  <title>Document</title>
  <style>
    /* * {
      border: solid red 1px;
    } */

    .card-top-produk {
      background: linear-gradient(180deg, #FFFFFF 0%, #DCD4FF 100%);

    }
  </style>
</head>

<body>

  <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd"
        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
      </path>
    </svg>
  </button>

  <aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="bg-[#DAD2FF] h-full px-3 py-4 overflow-y-auto">
      <a href="" class="flex items-center ps-3 my-5">
        <img src="{{ asset('images/chart.png') }}" class="h-12 me-3" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap">FakeStore</span>
      </a>
      <ul class="space-y-2 mt-10 font-medium border-t border-[#000000]">
        <li>
          <p class="flex text-lg items-center font-bold pt-5 text-gray-900 ms-3">

            Kategori
          </p>
        </li>

        <li>

          <a href="{{ route('getByCategory', ['category' => 'electronics']) }}" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Electronics

          </a>
        </li>
        <li>
          <a href="{{ route('getByCategory', ['category' => "men's clothing"]) }}" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Men Clothes

          </a>
        </li>
        <li>
          <a href="{{ route('getByCategory', ['category' => "women's clothing"]) }}" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Women Clothes

          </a>
        </li>
        <li>
          <a href="{{ route('getByCategory', ['category' => 'jewelery']) }}" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Jewelery

          </a>
        </li>
      </ul>
      <ul class="space-y-2 mt-5 font-medium border-t border-[#000000]">
        <li>
          <p class="flex text-lg items-center font-bold pt-5 text-gray-900 ms-3">
            <span class="material-symbols-outlined mr-2">
              arrow_back
            </span>
            Back
          </p>
        </li>
        <li>
          <a href="{{ route('index') }}" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Back to Home

          </a>
        </li>
        <li>
          <a href="#" class="flex items-center pl-10 py-2 text-slate-600 hover:text-[#B2A5FF]">

            Logout


          </a>
        </li>

      </ul>
    </div>
  </aside>

  <div class="p-4 ml-64">
    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="#"
            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#B2A5FF]">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Beranda
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <a href="#"
              class="ms-1 text-sm font-medium text-gray-700 hover:text-[#B2A5FF] md:ms-2">Kategori</a>
          </div>
        </li>
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Pakaian Pria</span>
          </div>
        </li>
      </ol>
    </nav>

  </div>

  @if (count($products) > 0)


  <div
    class=" ml-72 grid grid-cols-3 gap-8 text-wrap py-5 px-5 border border-gray-200 rounded-lg shadow-sm">

    @foreach($products as $product)
    <div class="bg-white p-4 shadow rounded-lg text-center  card-top-produk">
        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-40 object-contain mb-2"><br>
        <h3 class="line-clamp-4 font-semibold">{{ $product['title'] }}</h3><br>
        <h3 class="line-clamp-4 font-semibold"> Description : {{ $product['description'] }}</h3>
        <h3 class="line-clamp-4 font-semibold">Category : {{ $product['category'] }}</h3>
        <h3 class="line-clamp-4 font-semibold"><span class="text-yellow-500 px-2">★</span> {{ $product['rating']['rate'] }} ({{ $product['rating']['count'] }} Viewers) Price : ${{ $product['price'] }}</h3>
    </div>
@endforeach
  </div>

  @endif

  <div id="popup-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="fixed inset-0 bg-black opacity-50"></div>
    <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-[#DAD2FF] rounded-lg shadow-sm dark:bg-gray-700">
        <button type="button"
          class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-hide="popup-modal">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="p-4 md:p-5 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin membeli barang
            ini?</h3>
          <button data-modal-hide="popup-modal" type="button"
            class="text-white bg-[#B2A5FF] font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
            Yes, I'm sure
          </button>
          <button data-modal-hide="popup-modal" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900  bg-red-400 rounded-lg">No,
            cancel</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
