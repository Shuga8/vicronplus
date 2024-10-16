<div class="w-full py-4 px-2 flex justify-end">
    <button
        class="px-3 py-2 bg-transparent border rounded-md border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex flex-row gap-x-1 place-items-center text-sm"
        onclick="showNewForm()">
        <span class="material-symbols-outlined">
            wallet
        </span>
        <span class="uppercase text-xs font-semibold">
            new wallet
        </span>
    </button>
</div>

<div class="modal-container">
    <form action="{{ route('admin.wallet.store', 0) }}" class="invest_form" autocomplete="off" method="POST">

        <span class="absolute top-0 right-0 p-2 cursor-pointer material-symbols-outlined close-modal-btn text-red-700"
            onclick="closeModal()">
            cancel
        </span>


        <p class="text-center text-blue-700 text-xl mb-3 font-semibold modal-title uppercase">New Wallet</p>
        @csrf
        <div class="pt-6 pb-2">
            <label for="network" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Network</span><span class="text-red-600">*</span></label>
            <input type="text" name="network" id="network"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                autocomplete="network" placeholder="network e.g (BTC, USDT, BNB, ....)" value={{ old('network') }}>
        </div>

        <div class="py-2">
            <label for="address" class="text-gray-700 text-sm flex flex-row gap-x-1"><span class="font-semibold">Wallet
                    address</span><span class="text-red-600">*</span></label>
            <input type="text" name="address" id="address"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="wallet address..." autocomplete="address" value="{{ old('address') }}">
        </div>

        <div class="py-2">
            <label for="logo" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Network Logo</span><span class="text-red-600">*</span></label>
            <input type="file" name="logo" id="logo"
                class="w-full outline-none focus:outline-none  rounded-sm px-3 py-2 text-gray-600 mt-2"
                autocomplete="logo">
        </div>


        <div class="py-2 w-full flex justify-end">
            <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md">Save</button>
        </div>
    </form>
</div>


@push('scripts')
    <script>
        const modal = document.querySelector(".modal-container");
        const modalForm = modal.querySelector("form");

        function showNewForm(data = null) {
            if (data == null) {
                modal.querySelector(".modal-title").textContent = `New  Wallet`;
                modalForm.classList.remove("slide-up");
                modal.classList.add("active-modal");
                modalForm.classList.add("slide-down");
            } else {}
        }

        function closeModal() {
            modalForm.classList.remove("slide-down");
            modalForm.classList.add("slide-up");
            setTimeout(() => {
                // modalForm.querySelector("input[name='plan_name']").value = ""
                // modalForm.querySelector("input[name='minimum']").value = ""
                // modalForm.querySelector("input[name='maximum']").value = ""
                // modalForm.querySelector("input[name='percentage']").value = ""
                // modalForm.querySelector("input[name='duration']").value = ""
                // modalForm.querySelector("select[name='capital_return']").value = ""
                // modalForm.querySelector("select[name='unit']").value = ""
                // let action = `{{ route('admin.investment.store', ':id') }}`;
                // action = action.replace(":id", 0);
                // modalForm.setAttribute("action", action);
                modal.classList.remove("active-modal");
            }, 1000);
        }
    </script>
@endpush
