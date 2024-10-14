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
                            Duration
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
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $plan->plan_name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $plan->minimum }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->maximum }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->percentage }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $plan->duration }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class=""></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No investment plan available!
                            </td>
                        </tr>
                    @endunless

                </tbody>
            </table>


        </div>
    </div>

</x-admin-layout>
