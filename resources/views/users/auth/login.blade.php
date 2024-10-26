<x-page-layout :title="$title" :showHeader="false">

    <div class="auth-container">

        <div class="absolute right-[50%] md:right-5 translate-x-[50%] md:translate-x-[5px] md:top-5 top-20">
            <a href="{{ route('home') }}"
                class="px-4 bg-cyan-600 text-white py-1 rounded-sm hover:bg-cyan-500 uppercase">Home</a>
        </div>
        <div class="form-container">
            <div class="form-hero"></div>
            <form action="" method="POST">
                @csrf
                <h1>Login</h1>
                <p class="upper-text">Welcome back, login to your account.</p>



                <div class="group mt-1 mb-1 block">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter email address..."
                        autocomplete="off" class="" required>
                </div>


                <div class="group mt-1 mb-1 block">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="********" autocomplete="off"
                        class="" required>
                </div>


                <div class="group">
                    <div class="input-group flex flex-row gap-x-1 place-items-center">
                        <input type="checkbox" name="remember" id="remember"><label for="remember"
                            class="text-[11px] text-gray-500 outline-2 outline-transparent checked:outline-transparent focus:outline-transparent">Remember
                            Me</label>
                    </div>
                    <p class="text-[12px] w-full text-right">Don't have an account?<a class="text-primary-600"
                            href="{{ route('user.register') }}" class="login"> register here</a></p>

                </div>

                <div class="group">

                    <button class="w-full py-3 bg-primary-700 text-white hover:bg-primary-600">
                        Sign In
                    </button>

                </div>

            </form>
        </div>
    </div>

</x-page-layout>
