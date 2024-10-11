<x-layout :title="$title">

    <div class="dashboard-widgets py-10 px-4 gap-x-8 gap-y-7">
        <div class="widget flex flex-row gap-x-5 place-items-center justify-between px-4 rounded-md">
            <div class="icon w-20 h-3/5 bg-green-600 flex justify-center place-items-center rounded-md">
                <span class="material-symbols-outlined">
                    attach_money
                </span>
            </div>
            <div class="content flex flex-col gap-y-7 justify-left py-3">
                <p class="text-lg font-semibold float-right">Available Balance</p>

                <p class="text-2xl font-light float-right flex justify-end  mt-7 amount-usd">
                    {{ (float) $user->balance['USD'] }}
                </p>
            </div>


        </div>

        <div class="widget flex flex-row gap-x-5 place-items-center justify-between px-4 rounded-md">
            <div class="icon w-12 h-12 bg-blue-600 flex justify-center place-items-center rounded-full">
                <span class="material-symbols-outlined ">
                    currency_exchange
                </span>
            </div>
            <div class="content flex flex-col gap-y-7 justify-left py-3">
                <p class="text-lg font-semibold float-right">Total Invested Amount</p>
                <p class="text-2xl font-light float-right flex justify-end  mt-7 amount-usd">
                    {{ (float) $user->balance['USD'] }}
                </p>
            </div>
        </div>


        <div class="widget flex flex-row gap-x-5 place-items-center justify-between px-4 rounded-md">
            <div class="icon w-12 h-12 bg-purple-600 flex justify-center place-items-center rounded-full">
                <span class="material-symbols-outlined">
                    finance_mode
                </span>
            </div>
            <div class="content flex flex-col gap-y-7 justify-left py-3">
                <p class="text-lg font-semibold float-right">Total Amount Withdrawn</p>
                <p class="text-2xl font-light float-right flex justify-end  mt-7 amount-usd">
                    {{ (float) $user->balance['USD'] }}
                </p>
            </div>
        </div>




    </div>

    <div class="charts-container flex-wrap pb-10 px-4 gap-x-8 gap-y-7">
        <div class="history block py-4 px-5">
            <h5 class="text-lg px-2">Transaction History</h5>

            {{-- <div class="relative overflow-x-auto py-4 px-3">
                <table class="w-full transaction-table">
                    <thead>
                        <tr>
                            <th class="invisible">Date</th>
                            <th class="invisible">Details</th>
                            <th class="invisible">Remainder</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2">
                                    <span class="text-sm">30</span>
                                    <span class="text-blue-600 text-base">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 border-r-2 border-red-600 ">
                                    <span class="text-sm">24Hrs</span>
                                    <span class="text-red-600 text-base amount-usd">100</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <span class="text-white text-base bg-red-600 p-1  rounded-md">Minus</span>
                            </td>

                        </tr>

                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2">
                                    <span class="text-sm">30</span>
                                    <span class="text-blue-600 text-base">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 border-r-2 border-green-600 ">
                                    <span class="text-sm">24Hrs</span>
                                    <span class="text-green-600 text-base amount-usd">100</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <span class="text-white text-base bg-green-600 p-1  rounded-md">Plus</span>
                            </td>

                        </tr>

                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2">
                                    <span class="text-sm">30</span>
                                    <span class="text-blue-600 text-base">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 border-r-2 border-red-600 ">
                                    <span class="text-sm">24Hrs</span>
                                    <span class="text-red-600 text-base amount-usd">100</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <span class="text-white text-base bg-red-600 p-1  rounded-md">Minus</span>
                            </td>

                        </tr>

                    </tbody>

                </table>
            </div> --}}

        </div>
        <div class="history py-4 px-5">
            <h5 class="text-lg">Deposit History</h5>

            {{-- <div class="relative overflow-x-auto py-4 px-3">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="invisible">Date</th>
                            <th class="invisible">Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2 justify-center">
                                    <span class="text-sm text-center">10</span>
                                    <span class="text-blue-600 text-base text-center">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 justify-center">
                                    <span class="text-green-600 text-base amount-usd text-center">600</span>
                                </div>
                            </td>

                        </tr>

                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2 justify-center">
                                    <span class="text-sm text-center">10</span>
                                    <span class="text-blue-600 text-base text-center">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 justify-center">
                                    <span class="text-green-600 text-base amount-usd text-center">600</span>
                                </div>
                            </td>

                        </tr>


                        <tr class="border-b-8 border-gray-600 border-opacity-0">
                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1 border-r-2 border-blue-600 py-2 px-2 justify-center">
                                    <span class="text-sm text-center">10</span>
                                    <span class="text-blue-600 text-base text-center">Oct</span>
                                </div>
                            </td>

                            <td class="px-2">
                                <div class="flex flex-col  gap-y-1  py-2 px-2 justify-center">
                                    <span class="text-green-600 text-base amount-usd text-center">600</span>
                                </div>
                            </td>

                        </tr>


                    </tbody>
                </table>
            </div> --}}
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
