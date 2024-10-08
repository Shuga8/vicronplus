<x-page-layout :title="$title">

    <div class="login-container">
        <div class="menu-img-container hidden md:block">
            <img src="{{ asset('megamenu-img.png') }}" alt="megamenu" loading="lazy">
        </div>
        <div class="form-container">

            <h4 class="uppercase text-center mt-4 font-semibold text-blue-700 text-2xl">Login to {{ config('app.name') }}
            </h4>
            <form action="{{ route('user.loginUser') }}" name="login" method="POST" class="mt-10">
                @csrf

                <div class="my-2 px-3">
                    <label for="email" class="text-lg">Email</label>
                    <input type="email" name="email" placeholder="email@domain.com"
                        class="w-full px-2 py-3 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                    @error('email')
                        <p class="mb-1 px-2 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-2 px-3">
                    <label for="password" class="text-lg">Password</label>
                    <input type="password" name="password" placeholder="********"
                        class="w-full p-2 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                    @error('password')
                        <p class="mb-1 px-2 text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <label class="px-3 py-3 float-left flex place-items-center gap-x-1">
                    <input type="checkbox" name="remember" id="remember"
                        class=" outline-none focus:outline-none bg-white bg-opacity-10 text-blue-600">
                    <label for="remember" class="text-sm text-blue-700">remember me</label>
                </label>

                <div class="px-3 py-3 float-right">
                    <a href="{{ route('user.register') }}" class="text-sm text-blue-700 lowercase underline">Click to
                        register</a>
                </div>




                <div class="mt-6 px-3">
                    <button type="submit" class="bg-blue-600 py-3 px-3 rounded-3xl w-full hover:bg-blue-500">Sign
                        In</button>
                </div>
            </form>

        </div>
    </div>


</x-page-layout>
