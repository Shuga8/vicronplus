<header class="w-full py-3 px-2 border-b-2 border-gray-500 flex flex-row justify-between">
    <div class="py-3 px-3 cursor-pointer toggle-menu" onclick="toggleAsideVisisbilty()">
        <span class="material-symbols-outlined text-blue-600">
            menu
        </span>

    </div>

    <div class="flex flex-row gap-x-4 place-items-center">
        <a href="{{ route('user.investment.new') }}"
            class="py-2.5 px-3 border-x border-y border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white rounded-md flex flex-row gap-x-1 place-items-center"><span
                class="material-symbols-outlined text-xs ">
                currency_exchange
            </span><span class="text-sm uppercase font-semibold">Invest</span></a>
        <div class="">
            <div class="cursor-pointer flex flex-row place-items-center gap-x-1" onclick="toggleHeaderDrop()">
                <span class="material-symbols-outlined text-gray-700">
                    account_circle
                </span>
                <span class="text-[11px] text-gray-700">{{ auth()->user()->username }}</span>
                <span class="material-symbols-outlined text-gray-700">
                    keyboard_arrow_down
                </span>
            </div>

            <div id="header-drop" class="hidden fixed top-16 right-2 w-40 rounded-md bg-primary-700">
                <a href=""
                    class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                        class="material-symbols-outlined text-sm">
                        manage_accounts
                    </span> <span class="text-sm">Settings</span></a>

                <a href="{{ route('user.logout') }}"
                    class="py-3 px-3 w-full r flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                        class="material-symbols-outlined text-sm">
                        logout
                    </span> <span class="text-sm">Logout</span></a>
            </div>
        </div>
    </div>
</header>

<x-alerts />
