<x-admin-layout :title="$title">

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <x-user-search />

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            User
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Amount
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Wallet
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Created On
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>

                <tbody>

                    @unless ($withdraws->isEmpty())
                        @foreach ($withdraws as $withdraw)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $withdraw->user->username }}
                                    <br>
                                    <span class="text-[10px] text-gray-400">
                                        {{ $withdraw->user->email }}
                                    </span>
                                </th>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $withdraw->amount }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $withdraw->wallet }}
                                </td>
                                <td class="px-6 py-4">

                                    {{ showDateTime($withdraw->created_at) }} <br>
                                    {{ diffForHumans($withdraw->created_at) }}

                                </td>

                                <td class="px-6 py-4 h-auto flex flex-row justify-center place-items-center  gap-x-3">

                                    @if ($withdraw->status == 'approved')
                                        <p class="text-white bg-blue-600 text-center px-3 py-[4px] cursor-pointer">Completed
                                        </p>
                                    @elseif($withdraw->status == 'rejected')
                                        <p class="text-white bg-orange-600 text-center px-3 py-[4px] cursor-pointer">
                                            Rejected</p>
                                    @else
                                        <a href="{{ route('admin.users.withdraw.update', ['approved', $withdraw->id]) }}"
                                            class="text-white w-auto text-center bg-green-600 px-3 py-[4px] cursor-pointer">Complete</a>
                                        <a href="{{ route('admin.users.withdraw.update', ['rejected', $withdraw->id]) }}"
                                            class="text-white w-auto text-center bg-red-600 px-3 py-[4px] cursor-pointer">Reject</a>
                                    @endif



                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No Deposit!
                            </td>
                        </tr>
                    @endunless




                </tbody>


            </table>

            @if ($withdraws->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $withdraws->links() }}
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

</x-admin-layout>
