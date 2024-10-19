<x-admin-layout :title="$title">

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }} - {{ $user->username }}
        </h3>

        {{-- <hr class="border border-gray-200 w-full mx-auto" /> --}}

        <div
            class="details-widgets grid grid-cols-1 min-[600px]:grid-cols-2 min-[1120px]:grid-cols-4 py-7 px-3 gap-x-3 gap-y-4">
            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#342EAD] to-[#1e1b4d] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-hand-holding-dollar text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalDeposits }}</p>

                    <p class="text-white">Total Deposits</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>

            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#427e79] to-[#205c57] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div
                    class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-money-bill-trend-up text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalInvestments }}</p>

                    <p class="text-white">Total Investments</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>

            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#454282] to-[#211f54] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div
                    class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-money-bill text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalWithdraws }}</p>

                    <p class="text-white">Total Withdrawals</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>

            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#61325c] to-[#43173f] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div
                    class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-money-bill-transfer text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalTransactions }}</p>

                    <p class="text-white">Total Transactions</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>
        </div>

        <div class="flex w-full py-[5px] px-3 gap-x-2 gap-y-3 flex-wrap">
            <button
                class="bg-green-600 hover:bg-green-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[8px] rounded-md grow shrink">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Balance</span>
            </button>

            <button
                class="bg-red-600 hover:bg-red-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[8px] rounded-md grow shrink">
                <i class="fa-solid fa-circle-minus"></i>
                <span>Balance</span>
            </button>

            <a href="{{ route('admin.users.loginAsUser', $user->id) }}"
                class="bg-indigo-600 hover:bg-indigo-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[8px] rounded-md grow shrink">
                <i class="fa-solid fa-circle-right"></i>
                <span>Login as user</span>
            </a>

        </div>

        <div class="w-full py-4 px-3 shadow-slate-400 shadow-xl mt-10">
            <h4 class="text-teal-800 mb-2">Information of {{ $user->username }}</h4>

            <hr class="border border-gray-200 w-full mx-auto" />
        </div>

    </div>

</x-admin-layout>
