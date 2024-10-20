<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2">Deposit Logs</h2>

    <div class="px-3">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">
                                Proof
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">
                                Created On
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($deposits->isEmpty())
                        @foreach ($deposits as $deposit)
                            @php
                                if ($deposit->status === 'pending') {
                                    $status = 'bg-orange-500';
                                } elseif ($deposit->status === 'approved') {
                                    $status = 'bg-green-600';
                                } elseif ($deposit->status === 'rejected') {
                                    $status = 'bg-red-600';
                                }
                            @endphp
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                    <img src="/storage/{{ $deposit->proof }}"
                                        class="block mb-4 w-[50px] h-[50px] object-cover" alt="proof">
                                    <a href="/storage/{{ $deposit->proof }}" target="_blank"
                                        class="w-fit mt-3 bg-primary-600 text-white px-[8px] py-[2px] rounded-xl ml-2">
                                        view
                                    </a>
                                </th>
                                <td class="px-6 py-4 amount-usd text-gray-800">
                                    {{ $deposit->amount }}
                                </td>
                                <td class="px-6 py-4 capitalize">
                                    <span
                                        class="text-xs px-2 py-2 text-white {{ $status }}">{{ $deposit->status }}</span>
                                </td>
                                <td class="px-6 py-4 text-primary-600 text-right">
                                    {{ showDateTime($deposit->created_at) }}
                                    <br>
                                    {{ diffForHumans($deposit->created_at) }}

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No deposit has been placed
                            </td>
                        </tr>
                    @endunless



                </tbody>

            </table>

            @if ($deposits->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $deposits->links() }}
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
