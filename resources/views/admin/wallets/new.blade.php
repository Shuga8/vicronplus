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
    <form action="{{ route('admin.wallet.store', 0) }}" class="wallet_form" autocomplete="off" method="POST"
        enctype="multipart/form-data">

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
                autocomplete="network" placeholder="network e.g (BTC, USDT, BNB, ....)" value="{{ old('network') }}"
                required>
        </div>

        <div class="py-2">
            <label for="address" class="text-gray-700 text-sm flex flex-row gap-x-1"><span class="font-semibold">Wallet
                    address</span><span class="text-red-600">*</span></label>
            <input type="text" name="address" id="address"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="wallet address..." autocomplete="address" value="{{ old('address') }}" required>
        </div>

        <div class="py-2">

            <label for="logo" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Network Logo</span><span class="text-red-600">*</span></label>
            <img src="{{ asset('upload.png') }}" alt="former_logo" id="former_logo"
                class="w-20 h-20 mx-auto rounded-full mix-blend-multiply">
            <input type="file" name="logo" id="logo"
                class="w-full outline-none focus:outline-none  rounded-sm px-3 py-2 text-gray-600 mt-2 hidden"
                autocomplete="logo">

            <div class="w-fit mb-2 my-5 mx-auto">
                <label for="logo"
                    class="change-btn p-2 border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white cursor-pointer">choose
                    logo</label>
            </div>

        </div>


        <div class="py-2 w-full flex justify-end">
            <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md">Create</button>
        </div>
    </form>
</div>


@push('scripts')
    <script>
        const modal = document.querySelector(".modal-container");
        const modalForm = modal.querySelector("form");
        const file = modalForm.querySelector("input[type='file']");

        file.addEventListener("change", function(e) {
            const placeHolderImg = modalForm.querySelector("#former_logo");
            const files = e.target.files;

            if (files.length > 0) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    placeHolderImg.src = event.target.result;
                };
                reader.readAsDataURL(files[0]);
            }
        });

        function showNewForm(data = null) {
            if (data == null) {
                modal.querySelector(".modal-title").textContent = `New Wallet`;
                modalForm.querySelector("#former_logo").setAttribute("src", `/upload.png`);
                modalForm.querySelector(".change-btn").textContent = "Choose Logo";
                modalForm.classList.remove("slide-up");
                modal.classList.add("active-modal");
                modalForm.classList.add("slide-down");
            } else {

                modal.querySelector(".modal-title").textContent = `Edit ${data.network.toUpperCase()} Wallet`;
                modalForm.querySelector(".change-btn").textContent = "Change Logo";
                modalForm.querySelector("input[name='network']").value = data.network;
                modalForm.querySelector("input[name='address']").value = data.address;

                if (data.logo != null || data.logo != "") {
                    modalForm.querySelector("#former_logo").setAttribute("src", `/storage/${data.logo}`);
                    // modalForm.querySelector("#former_logo").classList.replace('hidden', 'block');
                }
                modalForm.querySelector("button").textContent = "Update";
                let action = `{{ route('admin.wallet.store', ':id') }}`;
                action = action.replace(":id", data.id);
                modalForm.setAttribute("action", action);
                modalForm.classList.remove("slide-up");
                modal.classList.add("active-modal");
                modalForm.classList.add("slide-down");
            }
        }

        function closeModal() {
            modalForm.classList.remove("slide-down");
            modalForm.classList.add("slide-up");
            setTimeout(() => {
                modalForm.querySelector("input[name='network']").value = "";
                modalForm.querySelector("input[name='address']").value = "";
                modalForm.querySelector(".change-btn").textContent = "Choose Logo";
                // modalForm.querySelector("#former_logo").classList.replace('block', 'hidden');

                let action = `{{ route('admin.wallet.store', ':id') }}`;
                action = action.replace(":id", 0);
                modalForm.setAttribute("action", action);
                modalForm.querySelector("button").textContent = "Create";
                modal.classList.remove("active-modal");
            }, 1000);
        }
    </script>
@endpush
