<x-layout :title="$title">

    <div
        class="details-widgets jus grid grid-cols-1 min-[600px]:grid-cols-3 min-[1120px]:grid-cols-5 py-7 px-3 gap-x-3 gap-y-4">

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
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#a9b55e] to-[#94a139] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-coins text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $user->profit->amount ?? 0 }}</p>

                <p class="text-white text-[11px]">Total Profit</p>
            </div>

        </div>

        <div
            class="relative widget h-[100px] bg-gradient-to-br flex flex-row gap-x-5 items-center from-[#342EAD] to-[#1e1b4d] shadow-slate-400 shadow-lg px-2 py-1 rounded-sm">

            <div class="icon w-16 h-4/5 bg-white bg-opacity-10 flex flex-row justify-center items-center rounded-md">
                <i class="fa-solid fa-hand-holding-dollar text-2xl text-white"></i>
            </div>

            <div class="widget-content">
                <p class="text-white text-xl amount-usd">{{ $totalInvestment }}</p>

                <p class="text-white text-[11px]">Total Invested</p>
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

                <p class="text-white text-[11px]">Total WIthdrawn</p>
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

                <p class="text-white text-[11px]">Total Deposits</p>
            </div>

            <a href="{{ route('user.deposit.log') }}"
                class="absolute top-1/2 right-px translate-y-[-50%] bg-white bg-opacity-5 text-white px-2 py-px text-[10px] hover:bg-opacity-30">
                View all
            </a>

        </div>


    </div>

    <div
        class="trading-widgets w-full grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-2 gap-y-4 justify-center pb-10 px-4">

        <div class="col-span-1 md:col-span-2 lg:col-span-3 h-[500px]">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js"
                    async>
                    {
                        "symbols": [
                            [
                                "MARKETSCOM:BITCOIN|1D"
                            ],
                            [
                                "MARKETSCOM:ETHEREUM|1D"
                            ],
                            [
                                "BNB|1D"
                            ]
                        ],
                        "chartOnly": false,
                        "width": "100%",
                        "height": "100%",
                        "locale": "en",
                        "colorTheme": "light",
                        "autosize": true,
                        "showVolume": false,
                        "showMA": false,
                        "hideDateRanges": false,
                        "hideMarketStatus": false,
                        "hideSymbolLogo": false,
                        "scalePosition": "right",
                        "scaleMode": "Normal",
                        "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                        "fontSize": "10",
                        "noTimeScale": false,
                        "valuesTracking": "1",
                        "changeMode": "price-and-percent",
                        "chartType": "area",
                        "maLineColor": "#2962FF",
                        "maLineWidth": 1,
                        "maLength": 9,
                        "headerFontSize": "medium",
                        "lineWidth": 2,
                        "lineType": 0,
                        "dateRanges": [
                            "1d|1",
                            "1m|30",
                            "3m|60",
                            "12m|1D",
                            "60m|1W",
                            "all|1M"
                        ]
                    }
                </script>
            </div>
        </div>

        <div class="h-[500px]">
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                    async>
                    {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "showChart": true,
                        "locale": "en",
                        "width": "100%",
                        "height": "100%",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": true,
                        "showFloatingTooltip": false,
                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                        "gridLineColor": "rgba(42, 46, 57, 0)",
                        "scaleFontColor": "rgba(19, 23, 34, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                        "tabs": [{
                                "title": "Indices",
                                "symbols": [{
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "S&P 500 Index"
                                    },
                                    {
                                        "s": "FOREXCOM:NSXUSD",
                                        "d": "US 100 Cash CFD"
                                    },
                                    {
                                        "s": "FOREXCOM:DJI",
                                        "d": "Dow Jones Industrial Average Index"
                                    },
                                    {
                                        "s": "INDEX:NKY",
                                        "d": "Japan 225"
                                    },
                                    {
                                        "s": "INDEX:DEU40",
                                        "d": "DAX Index"
                                    },
                                    {
                                        "s": "FOREXCOM:UKXGBP",
                                        "d": "FTSE 100 Index"
                                    }
                                ],
                                "originalTitle": "Indices"
                            },
                            {
                                "title": "Futures",
                                "symbols": [{
                                        "s": "CME_MINI:ES1!",
                                        "d": "S&P 500"
                                    },
                                    {
                                        "s": "CME:6E1!",
                                        "d": "Euro"
                                    },
                                    {
                                        "s": "COMEX:GC1!",
                                        "d": "Gold"
                                    },
                                    {
                                        "s": "NYMEX:CL1!",
                                        "d": "WTI Crude Oil"
                                    },
                                    {
                                        "s": "NYMEX:NG1!",
                                        "d": "Gas"
                                    },
                                    {
                                        "s": "CBOT:ZC1!",
                                        "d": "Corn"
                                    }
                                ],
                                "originalTitle": "Futures"
                            },
                            {
                                "title": "Bonds",
                                "symbols": [{
                                        "s": "CBOT:ZB1!",
                                        "d": "T-Bond"
                                    },
                                    {
                                        "s": "CBOT:UB1!",
                                        "d": "Ultra T-Bond"
                                    },
                                    {
                                        "s": "EUREX:FGBL1!",
                                        "d": "Euro Bund"
                                    },
                                    {
                                        "s": "EUREX:FBTP1!",
                                        "d": "Euro BTP"
                                    },
                                    {
                                        "s": "EUREX:FGBM1!",
                                        "d": "Euro BOBL"
                                    }
                                ],
                                "originalTitle": "Bonds"
                            },
                            {
                                "title": "Forex",
                                "symbols": [{
                                        "s": "FX:EURUSD",
                                        "d": "EUR to USD"
                                    },
                                    {
                                        "s": "FX:GBPUSD",
                                        "d": "GBP to USD"
                                    },
                                    {
                                        "s": "FX:USDJPY",
                                        "d": "USD to JPY"
                                    },
                                    {
                                        "s": "FX:USDCHF",
                                        "d": "USD to CHF"
                                    },
                                    {
                                        "s": "FX:AUDUSD",
                                        "d": "AUD to USD"
                                    },
                                    {
                                        "s": "FX:USDCAD",
                                        "d": "USD to CAD"
                                    }
                                ],
                                "originalTitle": "Forex"
                            }
                        ]
                    }
                </script>
            </div>
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
