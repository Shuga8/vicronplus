<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2">Settings</h2>

    <div class="change-password-form">
        <form action="{{ route('user.changePassword') }}" method="POST">
            @csrf

            <div class="my-3">
                <label for="password" class="text-gray-800">New password</label>
                <input type="password" name="password" id="password"
                    class="w-full border-cyan-600 outline-0 focus:outline-0  bg-transparent text-gray-700 rounded-sm"
                    required>
            </div>

            <div class="my-3">
                <label for="password_confirmation" class="text-gray-800">Confirm password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full border-cyan-600 outline-0 focus:outline-0  bg-transparent text-gray-700 rounded-sm"
                    required>
            </div>

            <button class="px-3 py-3 hover:bg-blue-500 text-white bg-blue-700">Change Password</button>
        </form>
    </div>
</x-layout>
