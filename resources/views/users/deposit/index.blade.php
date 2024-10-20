<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-6 px-2"> Copy a wallet address</h2>

    <div class="px-3">

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

                                    <img src="/storage/{{ $wallet->logo }}" class="w-10 h-10 object-fill rounded-full"
                                        alt="">
                                </th>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $wallet->network }}
                                </td>
                                <td class="px-6 py-4 amount-usd">
                                    {{ $wallet->address }}
                                </td>

                                <td class="px-6 py-4  ">
                                    <button
                                        class="text-white bg-green-500 py-[5px] px-[10px] rounded-sm flex flex-row place-items-center gap-x-1"
                                        onclick="copyAddress('{{ $wallet->address }}', {{ $wallet->id }})">

                                        <i class="fa-solid fa-clipboard"></i>
                                        <span class="cp-text-{{ $wallet->id }}">Copy</span>
                                    </button>


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
                            <td colspan="4" class="text-center py-1 px-2">{{ $wallets->links() }}</td>
                        </tr>
                    </tfoot>
                @endif
            </table>


        </div>
    </div>

    <h3 class="text-slate-800 text-base uppercase font-semibold mt-8 mb-6 px-[24px] text-center">Upload Proof Of
        Deposit</h3>

    <form class="form w-[350px] py-5 px-4 mx-auto" method="POST" action="{{ route('user.deposit.store') }}"
        enctype="multipart/form-data">
        @csrf

        <div>
            <label for="amount" class="text-gray-700 text-sm font-semibold">Amount</label>
            <input type="number" name="amount" id="amount"
                class="w-full mt-1 border-[1px] py-[6px] px-2 border-blue-600 outline-none focus:outline-none text-gray-700 "
                placeholder="usd" required>
        </div>

        <div class="my-5">
            <label for="proof" class="text-gray-700 text-sm font-semibold">Reciept</label>
            <input type="file" name="proof" id="proof" class="w-full  text-gray-700 " required>
        </div>

        <button type="submit" class="px-5 py-2 w-full bg-primary-600 text-white">Upload</button>
    </form>

    @push('scripts')
        <script type="text/javascript">
            async function copyAddress(addr, id) {
                await navigator.clipboard.writeText(addr);

                document.querySelector(`.cp-text-${id}`).textContent = "Copied";

                setTimeout(() => {
                    document.querySelector(`.cp-text-${id}`).textContent = "Copy";
                }, 800);
            }
        </script>
    @endpush

</x-layout>
