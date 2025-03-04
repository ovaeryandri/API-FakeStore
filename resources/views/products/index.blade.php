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
    * {
        scroll-behavior: smooth;
        user-select: none;
    }

     body {
        font-family: sans-serif;
     }

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
  <nav id="home" class="sticky top-0 z-50 py-3 bg-white shadow-lg shadow-white border-gray-200">
    <div class=" flex items-center justify-around -ml-5 mx-auto ">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/chart.png') }}" class="h-14" alt="Chart Logo" />
        <span class="self-center text-2xl font-bold whitespace-nowrap ">FakeStore</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">

          <li>
            <a href="#home"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0 ">Home</a>
          </li>
          <li>
            <a href="#category"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0">Category</a>
          </li>
          <li>
            <a href="#product"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0">Product</a>
          </li>

        </ul>
      </div>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">

          <li>
            <a href="{{ route('formLogin') }}"
              class="block py-2 px-3 font-bold text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#B3A6FF] md:p-0">Log
              In</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  {{-- END NAVBAR --}}


  {{-- JUMBOTRON START --}}
  <section id="home" class="hero pb-[70px] flex justify-around items-center">
    <div class="pt-16 pb-8">
      <h1 class="mb-4 text-3xl tracking-wide font-bold leading-none text-gray-900 md:text-5xl">

         Best Shopping Store ?<br>Yes At Fake Store</h1>
      <p class="mb-16 text-lg tracking-tighter font-semibold lg:text-2xl">You're Satisfied, We're Happy to Help
         <br> Troubleshooting Needs</p>
      <div class="space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="#"

          class="button-belanja inline-flex gap-4 justify-center items-center py-4 px-5 text-xl font-medium text-center text-white rounded-lg bg-[#B3A6FF] focus:ring-4 focus:ring-blue-300 hover:bg-[#dad2ff] hover:text-black">
          Shopping Now !

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
  <div class="bg-[#B2A5FF] flex justify-center items-center gap-24 py-4">
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
  <div id="category" class="mx-auto flex flex-col gap-10 px-40 mt-24">
      <h1 class=" text-3xl font-bold tracking-tight text-gray-900">Top Category</h1>
      <div class="grid grid-cols-4 gap-5 items-center">

         @foreach($categoryProducts as $product)

<div class="card-top-produk p-4 shadow rounded-lg cursor-pointer hover:bg-purple-700 text-center">
    <a href="{{ route('getByCategory', ['category' => "men's clothing"]) }}">

        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-40 object-contain mb-2">
    </a>
    <h3 class="text-lg font-semibold">{{ $product['category'] }}</h3>

    <!-- Button untuk menampilkan detail produk -->
    <form method="POST" action="{{ route('indexDetail') }}">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product['id'] }}">

    </form>
</div>
@endforeach
    </div>
</div>
  {{-- TOP KATEGORI END --}}


  {{-- TOP PRODUK --}}
  <div id="product" class="mx-auto flex flex-col gap-10 px-40 my-24">
    <h1 class=" text-3xl font-bold tracking-tight text-gray-900">Top Product</h1>
    <div class="grid grid-cols-3 items-center gap-5">
        @foreach ($topProducts as $product)

      <div
        class="card-top-produk flex w-full gap-5 px-5 py-10 bg-white border border-gray-200 rounded-lg shadow-sm:bg-gray-800:border-gray-700">

        <div>

            <div class="p-5">

              <h5 class="mb-2 line-clamp-2 font-bold tracking-tight text-gray-900:text-white">{{ $product['title'] }}</h5>

              <p class=" font-normal mb-5 text-gray-700:text-gray-400">Price : ${{ $product['price'] }}</p>

            </div>
            <form method="POST" action="{{ route('indexDetail') }}">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="submit"
              class="justify-self-start px-3 py-2 ml-5 text-sm font-medium text-center text-black bg-[#B3A6FF] rounded-lg focus:ring-4 focus:outline-none hover:bg-[#dad2ff] cursor-pointer">
              Items Detail
            </button>
            </form>

        </div>

        <div>

            <img class="rounded-t-lg justify-self-center" src="{{ $product['image'] }}" width="300"
              alt="" />
        </div>

      </div>
      @endforeach


    </div>

  </div>
  {{-- TOP PRODUK END --}}

  <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <!-- Overlay gelap transparan -->
    <div class="fixed inset-0 bg-black opacity-50"></div>

    <!-- Konten modal -->
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-[#dad2ff] rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-xl font-semibold text-gray-900">
                    Items Detail
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center data-modal-hide="static-modal>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                @if(isset($selectedProduct) && count($selectedProduct) > 0)
                    @foreach($selectedProduct as $product)
                        <div class="bg-white p-4 shadow rounded-lg text-center">
                            <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-40 object-contain mb-2">
                            <h3 class="text-lg font-semibold">{{ $product['title'] }}</h3>

                            <p class="text-gray-700">{{ $product['description'] }}</p>
                            <p class="text-sm text-gray-600">Category: {{ $product['category'] }}</p>
                            <div class="flex items-center justify-center mt-2">
                                <span class="text-yellow-500">★</span>
                                <span class="ml-1">{{ $product['rating']['rate'] }} ({{ $product['rating']['count'] }} reviews) Price : ${{ $product['price'] }}</span>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                    <input type="hidden" name="product_id" value="{{ isset($product) ? $product['id'] : '' }}">

                </form>
                <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-[#b2a5ff] rounded-lg border border-gray-200 cursor-pointer focus:z-10 focus:ring-4 focus:ring-gray-100">Back</button>
            </div>
        </div>
    </div>
</div>

  </div>

  <footer class="p-10 font-bold text-2xl bg-[#B3A6FF] flex items-center justify-center">
    <h1> @Badboys KEPL 2025</h1>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  @if(isset($showModal) && $showModal)
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil modal berdasarkan ID
        const modal = document.getElementById('static-modal');

        // Tambahkan class 'flex' dan hapus class 'hidden' untuk menampilkan modal
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    });
</script>
@endif

</body>

</html>
