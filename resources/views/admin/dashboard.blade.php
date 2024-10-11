<x-admin-layout :title="$title">

    <div class="content px-0 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />


        <div class="widgets px-6 pt-12 pb-4 gap-x-8 gap-y-4">

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-blue-700 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        groups
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $totalUsers }}</p>

                    <p class="text-xs text-gray-600">Total Users</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-blue-500 border text-blue-700 lowercase hover:bg-blue-600 hover:text-white text-xs">
                    View
                </a>

            </div>


            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-green-700 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        groups_3
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $totalActiveUsers }}</p>

                    <p class="text-xs text-gray-600">Active Users</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-green-500 border text-green-700 lowercase hover:bg-green-600 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-red-700 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        group_off
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $totalBannedUsers }}</p>

                    <p class="text-xs text-gray-600">Banned Users</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-red-500 border text-red-700 lowercase hover:bg-red-600 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-orange-500 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        finance
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $runningInvestments }}</p>

                    <p class="text-xs text-gray-600">Running Investments</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-orange-500 border text-orange-500 lowercase hover:bg-orange-400 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-green-500 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        finance_mode
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $completedInvestments }}</p>

                    <p class="text-xs text-gray-600">Completed Investments</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-green-500 border text-green-500 lowercase hover:bg-green-400 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-blue-500 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        finance_chip
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $allInvestments }}</p>

                    <p class="text-xs text-gray-600">All Investments</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-blue-500 border text-blue-500 lowercase hover:bg-blue-400 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-cyan-500 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        mintmark
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $allDeposits }}</p>

                    <p class="text-xs text-gray-600">All Deposits</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-cyan-500 border text-cyan-500 lowercase hover:bg-cyan-400 hover:text-white text-xs">
                    View
                </a>

            </div>

            <div class="widget py-2 px-4 flex flex-row place-items-center gap-x-4 relative">

                <div class="icon text-white bg-purple-500 w-20 h-3/4 rounded-md flex place-items-center justify-center">
                    <span class="material-symbols-outlined text-5xl">
                        send_money
                    </span>
                </div>

                <div class="block">

                    <p class="text-2xl text-black">{{ $allWithdrawals }}</p>

                    <p class="text-xs text-gray-600">All Withdrawals</p>
                </div>

                <a href=""
                    class="absolute top-2 right-2 py-px px-3 rounded-xl border-purple-500 border text-purple-500 lowercase hover:bg-purple-400 hover:text-white text-xs">
                    View
                </a>

            </div>


        </div>

        <div class="logins-list-container py-6">
            <h4 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">Users Logins</h4>

            <div class="logins-list overflow-x-auto w-full px-0 md:px-3 py-3">

                <table class="w-full shadow-xl">
                    <thead>
                        <tr class="border-b border-gray-900">
                            <th class="text-gray-600 py-2 px-1 text-center">S/N</th>
                            <th class="text-gray-600 py-2 px-1 text-center">User</th>
                            <th class="text-gray-600 py-2 px-1 text-center">IP</th>
                            <th class="text-gray-600 py-2 px-1 text-center">Long</th>
                            <th class="text-gray-600 py-2 px-1 text-center">Lat</th>
                            <th class="text-gray-600 py-2 px-1 text-center">Browser</th>
                            <th class="text-gray-600 py-2 px-1 text-center">OS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @unless ($logins->count() == 0)
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($logins as $login)
                                <tr>
                                    <td class="text-gray-700 p-2 text-center">{{ $counter++ }}</td>
                                    <td class="text-gray-700 p-2 text-center">{{ $login->user->username }}</td>
                                    <td class="text-blue-700 p-2 text-center italic">{{ $login->ip }}</td>
                                    <td class="text-gray-700 p-2 text-center">{{ $login->long }}</td>
                                    <td class="text-gray-700 p-2 text-center">{{ $login->lat }}</td>
                                    <td class="text-gray-700 p-2 text-center">{{ $login->browser }}</td>
                                    <td class="text-gray-700 p-2 text-center">{{ $login->os }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-red-700">No data available</td>
                            </tr>
                        @endunless
                    </tbody>
                </table>


                @if ($logins->hasPages())
                    <div class="pagination-links">
                        {{ $logins->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>

</x-admin-layout>
