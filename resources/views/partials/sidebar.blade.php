<aside class="aside">

    <div class="logo py-3 mb-12">
        <a href="{{ route('user.dashboard') }}"
            class="flex justify-center items-center place-content-center place-items-center">
            <img src="{{ asset('android-chrome-192x192.png') }}" alt="VicronPlus" loading="lazy" class="w-14 h-14"><span
                class="text-2xl font-bold mt-8 -ml-4 uppercase text-gray-400 italic">icron</span>
        </a>
    </div>

    <div class="close-btn cursor-pointer">
        <span class="material-symbols-outlined text-base text-red-600 " onclick="toggleAsideVisisbilty()">
            cancel
        </span>
    </div>


    <div class="links flex flex-col gap-y-5 px-5 w-full h-full">

        <a href="{{ route('user.dashboard') }}"
            class="py-3 px-3 bg-white bg-opacity-10 w-full rounded-md flex flex-row gap-x-2"><span
                class="material-symbols-outlined">
                dashboard
            </span> <span class="text-base">Dashboard</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                currency_exchange
            </span> <span class="text-base">Invest</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                account_balance_wallet
            </span> <span class="text-base">Deposit</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                send_money
            </span> <span class="text-base">Withdraw</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                credit_card_clock
            </span> <span class="text-base">Transaction History</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                manage_accounts
            </span> <span class="text-base">Settings</span></a>

        <a href="{{ route('user.logout') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10"><span
                class="material-symbols-outlined">
                logout
            </span> <span class="text-base">Logout</span></a>





    </div>


</aside>
