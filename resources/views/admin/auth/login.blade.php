<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }} | Admin {{ $title }}</title>
        @vite('resources/js/app.js')
    </head>

    <body class="bg-gray-900">

        <x-alerts />

        <section class=" bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="" class="flex items-center mb-6 text-2xl font-semibold text-white uppercase">
                    <img class="w-8 h-8 mr-2 mx-auto" src="{{ asset('android-chrome-192x192.png') }}" alt="logo">

                </a>
                <div
                    class="w-full  rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl text-white text-center">
                            Admin Login
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('admin.auth') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class=" border  rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                                @error('email')
                                    <p class="text-red-600 text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class=" rounded-lg  block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                                    required="">
                                @error('password')
                                    <p class="text-red-600 text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox"
                                            name="remember"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Remember
                                            me</label>
                                    </div>
                                </div>

                            </div>
                            <button type="submit"
                                class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
                                in</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </body>

</html>
