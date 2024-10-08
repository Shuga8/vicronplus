<x-page-layout :title="$title">

    <div class="login-container">
        <div class="menu-img-container hidden md:block">
            <img src="{{ asset('register.png') }}" alt="megamenu" loading="lazy">
        </div>
        <div class="form-container">

            <h4 class="uppercase text-center mt-4 font-semibold text-blue-700 text-2xl"> Register on
                {{ config('app.name') }}
            </h4>
            <form action="{{ route('user.registerUser') }}" name="login" method="POST" class="mt-10">
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
                    <label for="username" class="text-lg">Username</label>
                    <input type="username" name="username" placeholder="username"
                        class="w-full px-2 py-3 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                    @error('username')
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

                <div class="my-2 px-3">
                    <label for="password_confirmation" class="text-lg">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="********"
                        class="w-full p-2 my-3 outline-none focus:outline-none bg-white bg-opacity-10 rounded-2xl text-white">
                </div>



                <div class="px-3 py-3 float-right">
                    <a href="{{ route('user.login') }}" class="text-sm text-blue-700 lowercase underline">Click to
                        login</a>
                </div>




                <div class="mt-6 px-3 pb-4">
                    <button type="submit" class="bg-blue-600 py-3 px-3 rounded-3xl w-full hover:bg-blue-500">Sign
                        In</button>
                </div>
            </form>

        </div>
    </div>


</x-page-layout>
