<x-page-layout :title="$title" :showHeader="false">

    <div class="auth-container">

        <div class="absolute right-[1%] md:right-5 translate-x-[1%] md:translate-x-[5px] md:top-5 top-2">
            <a href="{{ route('home') }}"
                class="px-4 bg-cyan-600 text-white py-1 rounded-sm hover:bg-cyan-500 uppercase">Home</a>
        </div>


        <div class="form-container">
            <div class="form-hero"></div>
            <form action="" method="POST">
                @csrf
                <h1>Register An Account</h1>
                <p class="upper-text">Register an account on vicron plus</p>

                <div class="group mt-10 mb-1 block">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Enter fullname..." class=""
                        autocomplete="off" autofocus required>
                </div>

                <div class="group mt-1 mb-1 block">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter email address..."
                        autocomplete="off" class="" required>
                </div>

                <div class="group mt-1 mb-1 block">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter username..."
                        autocomplete="off" class="" required>
                </div>

                <div class="group mt-1 mb-1 block">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="********" autocomplete="off"
                        class="" required>
                </div>

                <div class="group mt-1 mb-1 block">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="********" autocomplete="off" class="" required>
                </div>

                <div class="group">
                    <p class="text-[12px] w-full text-right">Already have an account?<a class="text-primary-600"
                            href="{{ route('user.login') }}" class="login"> login Here</a></p>

                </div>

                <div class="group">

                    <button class="w-full py-3 bg-primary-700 text-white hover:bg-primary-600">
                        Sign Up
                    </button>

                </div>

            </form>
        </div>
    </div>

</x-page-layout>
