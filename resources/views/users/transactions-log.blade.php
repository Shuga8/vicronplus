<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2">Transaction History</h2>

    <div class="px-3">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>

                        <th scope="col" class="px-6 py-4">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Transaction Type
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">
                                Created On
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($transactions->isEmpty())
                        @foreach ($transactions as $transaction)
                            @php
                                if ($transaction->type === '0') {
                                    $status = 'bg-red-600';
                                    $type = 'Minus';
                                } elseif ($transaction->type === '1') {
                                    $status = 'bg-green-600';
                                    $type = 'Add';
                                }
                            @endphp
                            <tr class="bg-white border-b  hover:bg-gray-50 ">

                                <td class="px-6 py-4 amount-usd text-gray-800">
                                    {{ $transaction->amount }}
                                </td>
                                <td class="px-6 py-4 uppercase text-center ">
                                    <span
                                        class="text-xs px-2 py-2 text-white {{ $status }}">{{ $type }}</span>
                                </td>
                                <td class="px-6 py-4 text-primary-600 text-right">
                                    {{ showDateTime($transaction->created_at) }}
                                    <br>
                                    {{ diffForHumans($transaction->created_at) }}


                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No transaction found!
                            </td>
                        </tr>
                    @endunless



                </tbody>

            </table>

            @if ($transactions->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $transactions->links() }}
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
