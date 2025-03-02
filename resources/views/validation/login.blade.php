<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake Store</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="flex justify-center items-center w-full h-screen bg-gradient-to-t from-ungu1 via-ungu2 to-gray-200">

        <section class="bg-white rounded-xl w-full max-w-5xl h-5/6 shadow-lg overflow-hidden flex">
            <main class="w-8/12 h-full flex flex-col bg-slate-100">
                <div class="flex items-center m-5">
                    <img src="/image/logoStore.png" alt="logoStore" class="w-10 h-10">
                    <p class="text-lg text-black font-bold ml-2">FakeStore</p>
                </div>
                <div class="flex justify-center mt-10">
                    <img src="/image/logoStore.png" alt="logoStore" class="w-60 h-60">
                </div>

                <div class="flex flex-col w-full items-center">
                    <p class=" font-bold">Toko belanja terbaik?</p>
                    <p class="text-3xl font-bold text-ungu1">Ya di FakeStore</p>
                </div>

                <div class="flex justify-center items-center gap-2 mt-5">
                    <div class="w-24 h-2 rounded-full bg-slate-300"></div>
                    <div class="w-24 h-2 rounded-full bg-ungu1"></div>
                    <div class="w-24 h-2 rounded-full bg-slate-300"></div>
                </div>

            </main>

            <main class="w-full h-full flex flex-col">
                <div class="flex flex-row-reverse mt-5 items-center mr-5">
                    <a href="{{ route('formRegister') }}"
                        class="w-max h-max rounded-full text-ungu1 font-bold text-sm border-2 px-5 py-2 hover:bg-ungu1 hover:text-white duration-100">
                        Register
                    </a>
                    <p class="text-sm mr-2 text-ungu1 font-semibold">Belum memiliki akun?</p>
                </div>

                <div class="flex flex-col ml-10 mt-28">
                    <p class="text-ungu1 font-bold text-xl">Selamat Datang di FakeStore</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="flex flex-col mr-10">
                    @csrf
                    <div class="relative ml-10 mt-5">
                        <input type="email" id="email" name="email"
                            class="peer w-full border border-gray-300 rounded-md p-2 pl-4 pt-5 focus:outline-none focus:ring-2 focus:ring-ungu1 duration-100"
                            placeholder=" " value="{{ old('email') }}" required />
                        <label for="email"
                            class="absolute left-4 top-1 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-sm peer-focus:text-ungu1">
                            Email
                        </label>
                    </div>

                    <div class="relative ml-10 mt-5">
                        <input type="password" id="password" name="password"
                            class="peer w-full border border-gray-300 rounded-md p-2 pl-4 pt-5 focus:outline-none focus:ring-2 focus:ring-ungu1 duration-100"
                            placeholder=" " required />
                        <label for="password"
                            class="absolute left-4 top-1 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-1 peer-focus:text-sm peer-focus:text-ungu1">
                            Password
                        </label>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 text-green-700 p-3 mb-3 mt-2 ml-10 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 text-red-700 p-3 mb-3 mt-2 ml-10 rounded-lg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="w-full flex flex-row-reverse">
                        <button type="submit"
                            class="cursor-pointer w-max h-max px-14 py-2 bg-purple-700 rounded-full text-white font-bold ml-10 mt-5">
                            Login</button>
                    </div>

                </form>

            </main>
        </section>

    </div>

</body>

</html>
