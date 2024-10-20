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
                            Plan
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Amount
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

                    @unless ($investments->isEmpty())
                        @foreach ($investments as $investment)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $investment->user->username }}
                                    <br>
                                    <span class="text-[10px] text-gray-400">
                                        {{ $investment->user->email }}
                                    </span>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $investment->plan->plan_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $investment->amount }}
                                </td>
                                <td class="px-6 py-4 uppercase">
                                    {{ $investment->plan->duration }} {{ $investment->plan->unit }}s
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin.users.investments.update', [$investment->id, $investment->user->id]) }}"
                                        class="text-white px-4 py-1.5 rounded-md bg-orange-500 hover:bg-orange-400 text-[11px]">End</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No investment!
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

</x-admin-layout>
