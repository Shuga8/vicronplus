<aside class="aside py-9">

    <div class="close-btn cursor-pointer">
        <span class="material-symbols-outlined text-base text-red-600 " onclick="toggleAsideVisisbilty()">
            cancel
        </span>
    </div>


    <div class="links flex flex-col gap-y-1 px-5 w-full h-full">

        <a href="{{ route('admin.dashboard') }}"
            class="py-3 px-3 bg-white bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                dashboard
            </span> <span class="text-sm">Dashboard</span>
        </a>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(0)">
                <p class="flex flex-row gap-x-2">
                    <span class="material-symbols-outlined text-sm">
                        group
                    </span>
                    <span class="text-sm">Manage Users</span>
                </p>

                <span class="material-symbols-outlined arrow-icon">
                    keyboard_arrow_down
                </span>
            </div>

            <div class="dropdown-links bg-blue-800 bg-opacity-80">
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Active Users</span></a>
                <a href="" class="py-3 px-3 w-full  flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Banned Users</span></a>
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">All Users</span></a>
            </div>


        </div>

        <a href=""
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                finance
            </span> <span class="text-sm">Manage Investment Plans</span>
        </a>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(1)">
                <p class="flex flex-row gap-x-2">
                    <span class="material-symbols-outlined text-sm">
                        mintmark
                    </span>
                    <span class="text-sm">Manage Deposits</span>
                </p>

                <span class="material-symbols-outlined arrow-icon">
                    keyboard_arrow_down
                </span>
            </div>

            <div class="dropdown-links bg-blue-800 bg-opacity-80">
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Pending Deposits</span></a>
                <a href="" class="py-3 px-3 w-full  flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Completed Deposits</span></a>
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Rejected Deposits</span></a>
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">All Deposits</span></a>
            </div>


        </div>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(2)">
                <p class="flex flex-row gap-x-2">
                    <span class="material-symbols-outlined text-sm">
                        send_money
                    </span>
                    <span class="text-sm">Manage Withdrawals</span>
                </p>

                <span class="material-symbols-outlined arrow-icon">
                    keyboard_arrow_down
                </span>
            </div>

            <div class="dropdown-links bg-blue-800 bg-opacity-80">
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Pending Withdrawals</span></a>
                <a href="" class="py-3 px-3 w-full  flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Completed Withdrawals</span></a>
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">Rejected Withdrawals</span></a>
                <a href="" class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10">
                    <span class="material-symbols-outlined text-xs">
                        radio_button_checked
                    </span>
                    </span> <span class="text-xs">All Withdrawals</span></a>
            </div>


        </div>



        <a href=""
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                wallet
            </span> <span class="text-sm">Manage Wallet</span>
        </a>

        <a href=""
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                engineering
            </span> <span class="text-sm">Settings</span>
        </a>

        <a
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row justify-between gap-x-2 cursor-pointer">
            <span class="flex flex-row  gap-x-2"><span class="material-symbols-outlined text-sm">
                    notifications
                </span> <span class="text-sm">Notifications</span>
            </span>
            <span class="p-1 bg-purple-600 text-xs rounded-sm">upgrade</span>
        </a>

        <a
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row justify-between gap-x-2 cursor-pointer">
            <span class="flex flex-row  gap-x-2"><span class="material-symbols-outlined text-sm">
                    mail_lock
                </span> <span class="text-sm">Mail</span>
            </span>
            <span class="p-1 bg-purple-600 text-xs rounded-sm">upgrade</span>
        </a>

        <a
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row justify-between gap-x-2 cursor-pointer">
            <span class="flex flex-row  gap-x-2"><span class="material-symbols-outlined text-sm">
                    manufacturing
                </span> <span class="text-sm">Site Settings</span>
            </span>
            <span class="p-1 bg-purple-600 text-xs rounded-sm">upgrade</span>
        </a>


        <a href="{{ route('admin.logout') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined text-sm">
                logout
            </span> <span class="text-sm">Logout</span>
        </a>





    </div>


</aside>
