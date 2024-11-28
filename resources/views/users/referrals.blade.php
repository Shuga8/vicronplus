<x-layout :title="$title">
    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2">Referrals</h2>


    <div class="px-3">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            S.N
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Username
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">
                                Created On
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @unless ($referrals->isEmpty())
                        @foreach ($referrals as $referral)
                            @php
                                $count = 1;
                            @endphp

                            <tr class="bg-white border-b  hover:bg-gray-50 ">

                                <td class="px-6 py-4 amount-usd text-gray-800">
                                    {{ $count++ }}
                                </td>
                                <td class="px-6 py-4 uppercase text-center ">
                                    {{ $referral->user->username }}
                                </td>
                                <td class="px-6 py-4 text-primary-600 text-right">
                                    {{-- {{ showDateTime($referral->created_at) }}
                                    <br> --}}
                                    {{ diffForHumans($referral->created_at) }}


                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="px-6 py-4 text-center text-red-600" colspan="5">
                                No referral found!
                            </td>
                        </tr>
                    @endunless
                </tbody>
            </table>

            @if ($referrals->hasPages())
                <div class="pagination-links py-3 px-2">
                    {{ $referrals->links() }}
                </div>
            @endif
        </div>
    </div>
</x-layout>
