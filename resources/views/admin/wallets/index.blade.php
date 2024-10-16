<x-admin-layout :title="$title">

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <x-template view='admin.wallets.new' />

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-50 uppercase bg-blue-800 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Logo</span>
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Network
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-4">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @unless ($wallets->isEmpty())
                        @foreach ($wallets as $wallet)
                            <tr class="bg-white border-b  hover:bg-gray-50 ">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap uppercase">
                                    {{ $wallet->logo }}
                                </th>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $wallet->network }}
                                </td>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $wallet->address }}
                                </td>

                                <td class="px-6 py-4 flex flex-row gap-x-2 justify-end text-[10px]">
                                    <button
                                        class="text-white bg-green-500 py-1 px-2 rounded-sm flex flex-row place-items-center"
                                        onclick="showNewForm({{ json_encode($wallet) }})">
                                        <span class="material-symbols-outlined">
                                            edit_note
                                        </span>
                                    </button>

                                    <a href="{{ route('admin.wallet.delete', $wallet->id) }}"
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
                            <td class="px-6 py-4 text-center text-red-600" colspan="4">
                                No wallet available!
                            </td>
                        </tr>
                    @endunless

                </tbody>

                @if ($wallets->hasPages())
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-center">{{ $wallet->links() }}</td>
                        </tr>

                    </tfoot>
                @endif
            </table>


        </div>
    </div>

</x-admin-layout>
