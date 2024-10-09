<header class="w-full py-3 px-2 border-b-2 border-gray-500 flex flex-row justify-between">
    <div></div>

    <div class="flex flex-row gap-x-4 place-items-center">
        <a href=""
            class="py-2.5 px-3 border-x border-y border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white rounded-md flex flex-row gap-x-1 place-items-center"><span
                class="material-symbols-outlined text-xs ">
                currency_exchange
            </span><span class="text-sm uppercase font-semibold">Invest</span></a>
        <div class="">
            <div class="cursor-pointer flex flex-row place-items-center gap-x-1" onclick="toggleHeaderDrop()">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
                <span class="text-xs text-gray-300">{{ auth()->user()->username }}</span>
                <span class="material-symbols-outlined">
                    keyboard_arrow_down
                </span>
            </div>

            <div id="header-drop" class="hidden fixed top-16 right-2 w-40 rounded-md bg-slate-700">
                <a href=""
                    class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                        class="material-symbols-outlined">
                        manage_accounts
                    </span> <span class="text-base">Settings</span></a>

                <a href="{{ route('user.logout') }}"
                    class="py-3 px-3 w-full r flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                        class="material-symbols-outlined">
                        logout
                    </span> <span class="text-base">Logout</span></a>
            </div>
        </div>
    </div>
</header>
