<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-semibold leading-9 tracking-tight text-[#432C81]">Selamat Datang
            </h2>
            <h1 class="text-center text-2xl font-bold leading-9 tracking-tight text-[#432C81]">Masuk
            </h1>
            <img class="mx-auto h-[263px] w-[274px] mt-10" src="{{ asset('img/goat.png') }}" alt="Your Company">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-[#432C81]">Nama
                        Pengguna</label>
                    <div class="mt-2">
                        <input id="username" name="username" type="text" required
                            class="block w-full rounded-md border-0 py-1.5 text-[#432C81] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-[#432C81] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-[#432C81]">Kata
                            Sandi</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-[#432C81] hover:text-grey-900">Lupa Kata
                                Sandi?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-[#432C81] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-[8px] bg-[#432C81] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
