<x-layout :title="$title">

    <h2 class="text-slate-800 text-xl capitalize font-semibold mt-3 mb-2 px-2 text-center md:text-left">Place a
        withdrawal</h2>
    <p class="mb-6 text-red-600 px-3 text-center md:text-left">All withdrawals will be recieved in USDT</p>


    <div class="withdrawal-form mt-5 px-2 w-full">
        <form action="{{ route('user.withdraw.store') }}" class=" min-w-[300px] max-w-[550px] h-fit py-4 mx-auto px-2"
            method="POST">
            @csrf
            <div class="mt-2 mb-4">
                <label for="amount" class="text-primary-800 font-semibold">Amount</label>
                <input type="number" name="amount" id="amount"
                    class="w-full py-2 px-3 border-2 border-primary-800 rounded-md text-gray-950"
                    placeholder="Enter amount to be withdrawn">
            </div>

            <div class="my-2">
                <label for="wallet" class="text-primary-800 font-semibold">Wallet Address</label>
                <input type="text" name="wallet" id="wallet"
                    class="w-full py-2 px-3 border-2 border-primary-800 rounded-md text-gray-950"
                    placeholder="Enter your USDT wallet address....">
            </div>

            <div class="mt-2">
                <button type="submit"
                    class="mt-3 w-full py-2.5 text-white bg-primary-700 hover:bg-primary-600 rounded-sm">Place
                    Withdrawal</button>
            </div>
        </form>
    </div>

</x-layout>
