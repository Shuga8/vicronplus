<header class="w-full py-1 border-b-2 border-blue-500 flex flex-row justify-between">
    <div class="py-3 px-3 cursor-pointer toggle-menu" onclick="toggleAsideVisisbilty()">
        <span class="material-symbols-outlined">
            menu
        </span>

    </div>

    <div class="flex flex-row gap-x-4 place-items-center">

        <div class="">
            <div class="cursor-pointer flex flex-row place-items-center gap-x-1" onclick="toggleHeaderDrop()">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
                <span class="text-xs text-gray-300">{{ auth('admin')->user()->username }}</span>
                <span class="material-symbols-outlined">
                    keyboard_arrow_down
                </span>
            </div>

            <div id="header-drop" class="hidden fixed top-16 right-4 w-32 rounded-md bg-white shadow-2xl z-20">
                <a href="{{ route('admin.settings') }}"
                    class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-gray-200 hover:bg-opacity-10 text-blue-600 border-b border-slate-300"><span
                        class="material-symbols-outlined text-sm">
                        manage_accounts
                    </span> <span class="text-sm">Settings</span></a>

                <a href="{{ route('admin.logout') }}"
                    class="py-3 px-3 w-full  flex flex-row gap-x-2 hover:bg-gray-200 hover:bg-opacity-10 text-blue-600 "><span
                        class="material-symbols-outlined text-sm">
                        logout
                    </span> <span class="text-sm">Logout</span></a>
            </div>
        </div>
    </div>
</header>
