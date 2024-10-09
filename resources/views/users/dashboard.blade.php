<x-layout :title="$title">

    <div class="dashboard-widgets py-10 px-4 gap-x-8 gap-y-7">
        <div class="widget flex flex-row gap-x-5 place-items-center justify-between px-4 rounded-md">
            <div class="icon w-12 h-12 bg-green-600 flex justify-center place-items-center rounded-full">
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
            <h5 class="text-lg">Investment History</h5>

            <div class="py-4 px-3 w-full">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="flex flex-col px-6 border-r-2 border-blue-600">
                                <span class="text-sm">30</span>
                                <span class="text-blue-600 text-base">Oct</span>
                            </td>

                            <td class="flex flex-col px-6 ">
                                <span class="text-sm">24Hrs</span>
                                <span class="text-green-600 text-base amount-usd">100</span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>
        <div class="history py-2 px-5">
            <h5 class="text-lg">Deposit History</h5>
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
