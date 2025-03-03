<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
  <style>
    /* * {
      border: solid red 1px;
    } */

    .circle-hp {
      box-shadow: 0px 20px 20px 0px rgba(180, 167, 255, 1);
      background: linear-gradient(141.5deg, #DAD2FF 39.62%, #B2A5FF 77.85%);
    }

    .hero {
      background: linear-gradient(180deg, #FFFFFF 0%, #DAD2FF 100%);

    }

    .button-belanja {

      box-shadow: 0px 10px 20px 0px #B4A7FF;
    }

    .card-top-produk {
      background: linear-gradient(180deg, #FFFFFF 0%, #DCD4FF 100%);

    }
  </style>
</head>

<body>

  {{-- NAVBAR --}}
  <nav class="sticky top-0 z-50 bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/chart.png') }}" class="h-14" alt="Chart Logo" />
        <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">FakeStore</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

          <li>
            <a href="#"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Beranda</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kategori</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Produk</a>
          </li>

        </ul>
      </div>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

          <li>
            <a href="#"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log
              In</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  {{-- END NAVBAR --}}


  {{-- JUMBOTRON START --}}
  <section class="hero flex justify-evenly items-center dark:bg-gray-900">
    <div class="pt-16 pb-8">
      <h1 class="mb-4 text-3xl font-bold tracking-tight leading-none text-gray-900 md:text-5xl dark:text-white">
        Toko Belanja Terbaik ?<br>Ya di FakeStore</h1>
      <p class="mb-16 text-lg font-semibold lg:text-2xl  dark:text-gray-400">Anda Puas Kami
        Pun Senang Membantu <br> Menyelesaikan Masalah Kebutuhan</p>
      <div class="space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="#"
          class="button-belanja inline-flex gap-4 justify-center items-center py-4 px-5 text-xl font-medium text-center text-white rounded-lg bg-[#B3A6FF] focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
          Belanja Sekarang !

          <img class="h-[40px]" src="{{ asset('images/shopping-bag.png') }}" alt="">

        </a>

      </div>
    </div>
    <div class="pt-8 pb-20">
      <div class="circle-hp flex justify-center items-center rounded-full w-100 h-100">
        <img src="{{ asset('images/hp.png') }}" width="200" alt="">
      </div>

    </div>
  </section>
  <div class="bg-[#B2A5FF] flex justify-center items-center gap-14 py-4">
    <img src="{{ asset('images/amazon.png') }}" class="h-8" alt="">
    <img src="{{ asset('images/pandora.png') }}" class="h-5" alt="">
    <img src="{{ asset('images/shopify.png') }}" class="h-7" alt="">
    <img src="{{ asset('images/pinduoduo.png') }}" class="h-10" alt="">
    <img src="{{ asset('images/nike.png') }}" class="h-11" alt="">
    <img src="{{ asset('images/gucci.png') }}" class="h-4" alt="">
    <img src="{{ asset('images/lacoste.png') }}" class="h-4" alt="">
  </div>
  {{-- JUMBOTRON END --}}


  {{-- TOP KATEGORI --}}
  <div class="mx-auto flex flex-col gap-10 px-32 mt-24">
    <h1 class=" text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Top Kategori</h1>
    <div class="flex justify-between items-center">
      <div class="p-5 flex flex-col justify-center items-center gap-5 bg-[#F5F5F5] rounded-[20px]">
        <img src="{{ asset('images/hp-2.png') }}" width="150" alt="">
        <p>Barang Elektronik</p>
      </div>
      <div class="p-5 flex flex-col justify-center items-center gap-5 bg-[#F5F5F5] rounded-[20px]">
        <img src="{{ asset('images/pakaianpria.png') }}" width="150" alt="">
        <p>Pakaian Pria</p>
      </div>
      <div class="p-5 flex flex-col justify-center items-center gap-5 bg-[#F5F5F5] rounded-[20px]">
        <img src="{{ asset('images/pakaianwanita.png') }}" width="150" alt="">
        <p>Pakaian Wanita</p>
      </div>
      <div class="p-5 flex flex-col justify-center items-center gap-5 bg-[#F5F5F5] rounded-[20px]">
        <img src="{{ asset('images/perhiasan.png') }}" width="150" alt="">
        <p>Perhiasan</p>
      </div>
    </div>
  </div>
  {{-- TOP KATEGORI END --}}


  {{-- TOP PRODUK --}}
  <div class="mx-auto flex flex-col gap-10 px-32 my-24">
    <h1 class=" text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Top Produk</h1>
    <div class="flex flex-wrap justify-between items-center gap-9">
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>
      <div
        class="card-top-produk grid justify-items-stretch w-full max-w-2xs py-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">


        <h5 class="mb-2 ml-5 justify-self-start text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          Flash Sale
        </h5>



        <img class="rounded-t-lg justify-self-center" src="{{ asset('images/pakaianpria.png') }}" width="200"
          alt="" />

        <div class="p-5">

          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pakaian Pria</h5>

          <p class=" font-normal text-gray-700 dark:text-gray-400">Harga</p>

        </div>
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
          class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Detail Barang
        </button>
      </div>

    </div>

  </div>
  {{-- TOP PRODUK END --}}

  <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <!-- Overlay gelap transparan -->
    <div class="fixed inset-0 bg-black opacity-50"></div>
    <!-- Konten modal -->
    <div class="relative p-4 w-full max-w-2xl max-h-full">
      <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
        <!-- Modal header -->
        <div
          class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            Static modal
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="static-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4">
          <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens,
            companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant
            to ensure a common set of data rights in the European Union. It requires organizations to notify users as
            soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button data-modal-hide="static-modal" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
            accept</button>
          <button data-modal-hide="static-modal" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
        </div>
      </div>
    </div>
  </div>







  <footer class="p-10 font-bold text-2xl bg-[#B3A6FF] flex items-center justify-center">
    <h1> @Badboys KEPL 2025</h1>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>
