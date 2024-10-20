<aside class="aside">

    <div class="logo py-3 mb-12">
        <a href="{{ route('user.dashboard') }}"
            class="flex justify-center items-center place-content-center place-items-center">
            <img src="{{ asset('android-chrome-192x192.png') }}" alt="VicronPlus" loading="lazy" class="w-14 h-14"><span
                class="text-2xl font-bold mt-8 -ml-4 uppercase text-gray-50 italic">icron</span>
        </a>
    </div>

    <div class="close-btn cursor-pointer">
        <span class="material-symbols-outlined text-base text-red-600 " onclick="toggleAsideVisisbilty()">
            cancel
        </span>
    </div>


    <div class="links flex flex-col gap-y-1 px-5 w-full h-full">

        <a href="{{ route('user.dashboard') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                dashboard
            </span> <span class="text-sm">Dashboard</span></a>

        <a href="{{ route('user.investment.new') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                currency_exchange
            </span> <span class="text-sm">Invest</span></a>

        <a href="{{ route('user.investment.log') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                description
            </span> <span class="text-sm">Investment Logs</span></a>

        <a href="{{ route('user.deposit.new') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                account_balance_wallet
            </span> <span class="text-sm">Deposit</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                description
            </span> <span class="text-sm">Deposit Logs</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                send_money
            </span> <span class="text-sm">Withdraw</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                description
            </span> <span class="text-sm">Withdraw Logs</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                credit_card_clock
            </span> <span class="text-sm">Transaction History</span></a>

        <a href=""
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                manage_accounts
            </span> <span class="text-sm">Settings</span></a>

        <a href="{{ route('user.logout') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor"><span
                class="material-symbols-outlined text-sm">
                logout
            </span> <span class="text-sm">Logout</span></a>


    </div>


</aside>
