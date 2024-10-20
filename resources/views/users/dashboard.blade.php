<x-layout :title="$title">

    <div
        class="details-widgets jus grid grid-cols-1 min-[600px]:grid-cols-2 min-[1120px]:grid-cols-4 py-7 px-3 gap-x-3 gap-y-4">

        <div
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#61325c] to-[#43173f] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-money-bill-transfer text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $user->balance['USD'] }}</p>

                <p class="text-white text-[11px]">Balance</p>
            </div>

        </div>

        <div
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#342EAD] to-[#1e1b4d] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-hand-holding-dollar text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $totalInvestment }}</p>

                <p class="text-white text-[11px]">Total Amount Invested</p>
            </div>

            <a href="{{ route('user.investment.log') }}"
                class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                View all
            </a>

        </div>

        <div
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#427e79] to-[#205c57] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-money-bill-trend-up text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $totalWithdrawn }}</p>

                <p class="text-white text-[11px]">Total Amount WIthdrawn</p>
            </div>

            <a href="{{ route('user.withdraw.log') }}"
                class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                View all
            </a>

        </div>

        <div
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#454282] to-[#211f54] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-money-bill text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $totalDeposit }}</p>

                <p class="text-white text-[11px]">Total Amount Deposited</p>
            </div>

            <a href="{{ route('user.deposit.log') }}"
                class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                View all
            </a>

        </div>


    </div>

    <div class="history-container pb-10 px-4 gap-x-8 gap-y-7">
        <div class="history py-4 px-5 custom-shadow-sm ">
            <h5 class="text-xs px-2 text-gray-600 uppercase font-semibold mb-3">Last 3 Deposits</h5>

            @unless ($deposits->count() == 0)
                @foreach ($deposits as $deposit)
                    @php
                        $status = '';

                        if ($deposit->status == 'pending') {
                            $status = 'bg-yellow-400';
                        } elseif ($deposit->status == 'approved') {
                            $status = 'bg-green-600';
                        } else {
                            $status = 'bg-red-600';
                        }

                    @endphp
                    <div
                        class="py-[17px] px-3 flex flex-row justify-between gap-x-2 place-items-center items-centerc w-full">

                        <div class="text-blue-600">
                            {{ diffForHumans($deposit->created_at) }}
                        </div>

                        <div class="amount-usd text-[16px] text-slate-900">
                            {{ $deposit->amount }}
                        </div>

                        <div
                            class="px-3 text-[10px] py-px rounded-md {{ $status }} text-white flex place-items-center">
                            {{ $deposit->status }}
                        </div>

                    </div>
                @endforeach
            @else
                <div class="w-full h-full flex justify-center items-center text-red-600">
                    No deposit has been made!
                </div>
            @endunless




        </div>
        <div class="history py-4 px-5 custom-shadow-sm">
            <h5 class="text-xs px-2 text-gray-600 uppercase font-semibold mb-3">Last 3 WIthdrawals</h5>

            @unless ($withdrawals->count() == 0)
                @foreach ($withdrawals as $withdrawal)
                    @php
                        $status = '';

                        if ($withdrawal->status == 'pending') {
                            $status = 'bg-yellow-400';
                        } elseif ($withdrawal->status == 'approved') {
                            $status = 'bg-green-600';
                        } else {
                            $status = 'bg-red-600';
                        }

                    @endphp
                    <div
                        class="py-[17px] px-3 flex flex-row justify-between gap-x-2 place-items-center items-centerc w-full">

                        <div class="text-blue-600">
                            {{ diffForHumans($withdrawal->created_at) }}
                        </div>

                        <div class="amount-usd text-[16px] text-slate-900">
                            {{ $withdrawal->amount }}
                        </div>

                        <div
                            class="px-3 text-[10px] py-px rounded-md {{ $status }} text-white flex place-items-center">
                            {{ $withdrawal->status }}
                        </div>

                    </div>
                @endforeach
            @else
                <div class="w-full h-full flex justify-center items-center text-red-600">
                    No withdrawal has been placed!
                </div>
            @endunless

        </div>

    </div>

    <div class="px-4 pb-3">
        <div class="w-full h-[250px] rounded-md custom-shadow-sm py-4 px-5">
            <h5 class="text-xs px-2 text-gray-600 uppercase font-semibold mb-3">Last 3 Transactions</h5>

            @unless ($transactions->count() == 0)
                @foreach ($transactions as $transaction)
                    <div
                        class="py-[17px] px-3 flex flex-row justify-between gap-x-2 place-items-center items-center w-full">

                        <div class="text-blue-600">
                            {{ diffForHumans($transaction->created_at) }}
                        </div>

                        <div class="amount-usd text-[16px] text-slate-900">
                            {{ $transaction->amount }}
                        </div>

                        <div
                            class="px-3 text-[10px] py-px rounded-md {{ $transaction->type === '1' ? 'bg-green-600' : 'bg-red-600' }} text-white flex place-items-center">
                            {{ $transaction->type === '1' ? 'addition' : 'subtraction' }}
                        </div>

                    </div>
                @endforeach
            @else
                <div class="w-full h-full flex justify-center items-center text-red-600">
                    No Transaction has been placed!
                </div>
            @endunless
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

</x-layout>
