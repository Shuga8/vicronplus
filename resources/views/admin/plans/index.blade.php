<x-admin-layout :title="$title">

    <div class="content px-0 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <x-new-investment-plan />

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            Plan Name
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Minimum
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Maximum
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Percentage
                        </th>

                        <th scope="col" class="px-6 py-4">
                            Caiptal Return
                        </th>

                        <th scope="col" class="px-6 py-4">
                            Duration
                        </th>

                        <th scope="col" class="px-6 py-4">
                            Unit
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($plans->isEmpty())
                        @foreach ($plans as $plan)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap uppercase">
                                    {{ $plan->plan_name }}
                                </th>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $plan->minimum }}
                                </td>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $plan->maximum }}
                                </td>
                                <td class="px-6 py-4 text-orange-700">
                                    {{ $plan->percentage }}%
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->capital_return }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->duration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->unit }}
                                </td>
                                <td class="px-6 py-4 flex flex-row gap-x-2 justify-end text-[10px]">
                                    <button
                                        class="text-white bg-green-500 py-1 px-2 rounded-sm flex flex-row place-items-center"
                                        onclick="showNewForm({{ json_encode($plan) }})">
                                        <span class="material-symbols-outlined">
                                            edit_note
                                        </span>
                                    </button>

                                    <a href="{{ route('admin.investment.delete', $plan->id) }}"
                                        class="text-white bg-red-700 py-1 px-2 rounded-sm flex flex-row place-items-center">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="8">
                                No investment plan available!
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>


        </div>
    </div>

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

</x-admin-layout>
