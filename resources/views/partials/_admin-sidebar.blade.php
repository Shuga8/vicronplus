<aside class="aside py-9 px-1">

    <div class="close-btn cursor-pointer">
        <span class="material-symbols-outlined text-base text-red-600 " onclick="toggleAsideVisisbilty()">
            cancel
        </span>
    </div>


    <div class="links flex flex-col gap-y-1 px-4 w-full h-full">

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
                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Active Users</span>
                    </p>

                    <span class="px-1 bg-green-600 text-xs text-white rounded-lg">{{ $activeUsersCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Banned Users</span>
                    </p>

                    <span class="px-1 bg-red-600 text-xs text-white rounded-lg">{{ $bannedUsersCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">All Users</span>
                    </p>

                    <span class="px-1 bg-cyan-500 text-xs text-white rounded-lg">{{ $allUsersCount }}</span>
                </a>
            </div>


        </div>

        <a href=""
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                finance
            </span> <span class="text-sm">Manage Investment Plans</span>
        </a>

        <a href=""
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined text-sm">
                wallet
            </span> <span class="text-sm">Manage Wallet</span>
        </a>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(1)">
                <p class="flex flex-row gap-x-2">
                    <span class="material-symbols-outlined text-sm">
                        finance_mode
                    </span>
                    <span class="text-sm">Investments</span>
                </p>

                <span class="material-symbols-outlined arrow-icon">
                    keyboard_arrow_down
                </span>
            </div>

            <div class="dropdown-links bg-blue-800 bg-opacity-80">
                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Running Investments</span>
                    </p>

                    <span class="px-1 bg-orange-500 text-xs text-white rounded-lg">{{ $runningInvestmentsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Completed Investments</span>
                    </p>

                    <span
                        class="px-1 bg-green-500 text-xs text-white rounded-lg">{{ $completedInvestmentsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">All Investments</span>
                    </p>

                    <span class="px-1 bg-green-500 text-xs text-white rounded-lg">{{ $allInvestmentsCount }}</span>
                </a>

            </div>


        </div>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(2)">
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
                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Pending Deposits</span>
                    </p>

                    <span class="px-1 bg-orange-500 text-xs text-white rounded-lg">{{ $pendingDepositsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Completed Deposits</span>
                    </p>

                    <span class="px-1 bg-green-500 text-xs text-white rounded-lg">{{ $approvedDepositsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Rejected Deposits</span>
                    </p>

                    <span class="px-1 bg-red-600 text-xs text-white rounded-lg">{{ $rejectedDepositsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">All Deposits</span>
                    </p>

                    <span class="px-1 bg-cyan-500 text-xs text-white rounded-lg">{{ $allDepositsCount }}</span>
                </a>

            </div>


        </div>

        <div class="dropdown-list">
            <div class="dropdownBtn py-3 px-3 flex flex-row justify-between place-items-center text-white  hover:bg-white hover:bg-opacity-10 p-1 rounded-md cursor-pointer"
                onclick="toggleDropDown(3)">
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

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Pending Withdrawals</span>
                    </p>

                    <span
                        class="px-1 bg-orange-500 text-xs text-white rounded-lg">{{ $pendingWithdrawalsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Completed Withdrawals</span>
                    </p>

                    <span
                        class="px-1 bg-green-500 text-xs text-white rounded-lg">{{ $approvedWithdrawalsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">Rejected Withdrawals</span>
                    </p>

                    <span class="px-1 bg-red-600 text-xs text-white rounded-lg">{{ $rejectedWithdrawalsCount }}</span>
                </a>

                <a href=""
                    class="py-3 px-3 w-full flex flex-row justify-between place-items-center hover:bg-white hover:bg-opacity-10">
                    <p class="flex flex-row gap-x-2">
                        <span class="material-symbols-outlined text-xs">
                            radio_button_checked
                        </span>
                        </span> <span class="text-xs">All Withdrawals</span>
                    </p>

                    <span class="px-1 bg-cyan-500 text-xs text-white rounded-lg">{{ $allWIthdrawalsCount }}</span>
                </a>

            </div>


        </div>

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
            <span class="p-1 bg-red-600 text-xs rounded-sm upgrade-span">upgrade</span>
        </a>

        <a
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row justify-between gap-x-2 cursor-pointer">
            <span class="flex flex-row  gap-x-2"><span class="material-symbols-outlined text-sm">
                    mail_lock
                </span> <span class="text-sm">Mail</span>
            </span>
            <span class="p-1 bg-red-600 text-xs rounded-sm upgrade-span">upgrade</span>
        </a>

        <a
            class="py-3 px-3 hover:bg-white hover:bg-opacity-10 w-full rounded-md flex flex-row justify-between gap-x-2 cursor-pointer">
            <span class="flex flex-row  gap-x-2"><span class="material-symbols-outlined text-sm">
                    manufacturing
                </span> <span class="text-sm">Site Settings</span>
            </span>
            <span class="p-1 bg-red-600 text-xs rounded-sm upgrade-span">upgrade</span>
        </a>


        <a href="{{ route('admin.logout') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined text-sm">
                logout
            </span> <span class="text-sm">Logout</span>
        </a>





    </div>


</aside>
