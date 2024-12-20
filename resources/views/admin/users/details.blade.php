<x-admin-layout :title="$title">

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }} - {{ $user->username }}
        </h3>

        {{-- <hr class="border border-gray-200 w-full mx-auto" /> --}}

        <x-template view="admin.users.addSubBalance" />

        <div
            class="details-widgets grid grid-cols-1 min-[600px]:grid-cols-2 min-[1120px]:grid-cols-5 py-7 px-3 gap-x-3 gap-y-4">
            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#342EAD] to-[#1e1b4d] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-hand-holding-dollar text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalDeposits }}</p>

                    <p class="text-white text-[11px]">Total Deposits</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>

            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#ad4c2e] to-[#402418] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div
                    class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-hand-holding-dollar text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl amount-usd">{{ $user->profit->amount ?? 0 }}</p>

                    <p class="text-white text-[11px]">Total Profit</p>
                </div>

            </div>

            <div
                class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#427e79] to-[#205c57] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

                <div
                    class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                    <i class="fa-solid fa-money-bill-trend-up text-2xl text-white"></i>
                </div>

                <div class="widget-content">
                    <p class="text-white text-xl">{{ $totalInvestments }}</p>

                    <p class="text-white text-[11px]">Total Investments</p>
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

                    <p class="text-white text-[11px]">Total Withdrawals</p>
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

                    <p class="text-white text-[11px]">Total Transactions</p>
                </div>

                <a href=""
                    class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                    View all
                </a>

            </div>
        </div>

        <div class="flex w-full py-[5px] px-3 gap-x-2 gap-y-3 flex-wrap">
            <button
                class="bg-green-600 hover:bg-green-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]"
                onclick="showFormModal({{ json_encode($user) }}, 'add')">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Balance</span>
            </button>

            <button
                class="bg-red-600 hover:bg-red-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]"
                onclick="showFormModal({{ json_encode($user) }}, 'sub')">
                <i class="fa-solid fa-circle-minus"></i>
                <span>Balance</span>
            </button>

            <a href="{{ route('admin.users.loginAsUser', $user->id) }}" target="_blank" referrerpolicy="no-referrer"
                class="bg-indigo-600 hover:bg-indigo-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                <i class="fa-solid fa-circle-right"></i>
                <span>Login as user</span>
            </a>

            <a href="{{ route('admin.users.deposits', ['all', 'search' => $user->email]) }}"
                referrerpolicy="no-referrer"
                class="bg-teal-600 hover:bg-teal-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                <span>Deposits</span>
            </a>

            <a href="{{ route('admin.users.withdrawals', ['all', 'search' => $user->email]) }}"
                referrerpolicy="no-referrer"
                class="bg-purple-600 hover:bg-purple-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                <i class="fa-solid fa-money-bill-transfer"></i>
                <span>Withdrawals</span>
            </a>

            <a href="{{ route('admin.users.investments', ['all', 'search' => $user->email]) }}"
                referrerpolicy="no-referrer"
                class="bg-cyan-600 hover:bg-cyan-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                <i class="fa-solid fa-money-bill-trend-up"></i>
                <span>Investments</span>
            </a>

            @if ($user->status === 0)
                <a href="{{ route('admin.users.banUnbanUser', [1, $user->id]) }}" referrerpolicy="no-referrer"
                    class="bg-green-600 hover:bg-green-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                    <i class="fa-solid fa-user-check"></i>
                    <span>Unban</span>
                </a>
            @else
                <a href="{{ route('admin.users.banUnbanUser', [0, $user->id]) }}" referrerpolicy="no-referrer"
                    class="bg-yellow-600 hover:bg-yellow-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                    <i class="fa-solid fa-user-slash"></i>
                    <span>Ban</span>
                </a>
            @endif
            <a href="{{ route('admin.chat.all', $user->id) }}" referrerpolicy="no-referrer"
                class="bg-teal-600 hover:bg-teal-500 text-white flex flex-row gap-x-1 justify-center place-items-center px-5 py-[4px] rounded-md grow shrink text-[13px]">
                <i class="fa-brands fa-rocketchat"></i>
                <span>Chat</span>
            </a>


        </div>

        <div class="w-full py-4 px-3 shadow-slate-400 shadow-xl mt-10">
            <h4 class="text-teal-800 mb-2 text-lg">Information of {{ $user->username }}</h4>
            <hr class="border border-gray-200 w-full mx-auto" />

            <div class="px-3 flex flex-row gap-x-3 py-3">
                <span class="text-gray-800 font-semibold">Username:</span>
                <span class="text-gray-500 ">{{ $user->username }}</span>
            </div>

            <div class="px-3 flex flex-row gap-x-3 py-3">
                <span class="text-gray-800 font-semibold">Email:</span>
                <span class="text-gray-500 ">{{ $user->email }}</span>
            </div>

            <div class="px-3 flex flex-row gap-x-3 py-3">
                <span class="text-gray-800 font-semibold">Referred By:</span>
                <span class="text-gray-500 ">{{ $user?->referrer?->username ?? 'No referral' }}</span>
            </div>

            <div class="px-3 flex flex-row gap-x-3 py-5 place-items-center">
                <span class="text-gray-800 font-semibold">Joined at:</span>
                <span class="text-primary-600 text-[11px]">{{ showDateTime($user->created_at) }},
                    {{ diffForHumans($user->created_at) }}</span>
            </div>
        </div>


        <div class="profit-form px-3 py-7">
            <h4 class="text-teal-800 mb-2 text-lg">Change Profit Amount</h4>
            <hr class="border border-gray-200 w-full mx-auto mb-3" />
            <form action="{{ route('admin.users.updateProfit') }}" method="POST">
                @csrf

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="max-w-[300px]">
                    <label for="amount">Amount *</label>
                    <input type="number" name="amount" id="amount" class="w-full text-black"
                        value="{{ $user->profit->amount ?? 0 }}" step="any" min="0">
                </div>


                <button class="mt-6 py-[12px] bg-cyan-600 px-[14px] text-white text-[14px]"
                    type="submit">UPDATE</button>
            </form>
        </div>

    </div>

    @push('scripts')
        <script type="text/javascript">
            const amountUSDFields = document.querySelectorAll(".amount-usd");

            amountUSDFields.forEach(field => {
                let amount = parseFloat(field.textContent.replace(/[^\d\.]/g, ''));
                amount = amount.toLocaleString("en-US", {
                    style: "currency",
                    currency: "USD"
                });
                field.textContent = amount;
            });
        </script>
    @endpush

</x-admin-layout>
