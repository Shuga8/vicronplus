<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2">Investment Log</h2>


    <div class="px-3">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            Plan
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Duration
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($investments->isEmpty())
                        @foreach ($investments as $investment)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $investment->plan->plan_name }}
                                </th>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $investment->amount }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    {{ $investment->plan->duration }} {{ $investment->plan->unit }}s
                                </td>
                                <td class="px-6 py-4 ">
                                    <span
                                        class="text-white px-[5px] py-[6px] rounded-sm {{ $investment->status == true ? 'bg-green-600' : 'bg-orange-500' }}">{{ $investment->status == true ? 'completed' : 'running' }}</span>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No running investment
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>

            @if ($investments->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $investments->links() }}
                </div>
            @endif

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
