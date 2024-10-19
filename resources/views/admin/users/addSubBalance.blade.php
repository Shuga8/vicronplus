<div class="modal-container">
    <form action="{{ route('admin.users.addSubBalance') }}" class="wallet_form" autocomplete="off" method="POST"
        enctype="multipart/form-data">

        <span class="absolute top-0 right-0 p-2 cursor-pointer material-symbols-outlined close-modal-btn text-red-700"
            onclick="closeModal()">
            cancel
        </span>


        <p class="text-center text-blue-700 text-xl mb-3 font-semibold modal-title uppercase"></p>
        @csrf
        <div class="">

            <input type="hidden" name="user_id" id="user_id"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                required>
        </div>

        <div class="">

            <input type="hidden" name="type" id="type"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                required>
        </div>

        <div class="py-2">
            <label for="amount" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Amount</span><span class="text-red-600">*</span></label>
            <input type="number" name="amount" id="amount"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="amount" autocomplete="amout" required>
        </div>


        <div class="py-2 w-full flex justify-end">
            <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md"></button>
        </div>
    </form>
</div>

@push('scripts')
    <script>
        const modal = document.querySelector(".modal-container");
        const modalForm = modal.querySelector("form");

        function showFormModal(data, type) {

            modal.querySelector(".modal-title").textContent = `${type.toUpperCase()} Balance`;
            modalForm.classList.remove("slide-up");
            modal.classList.add("active-modal");
            modalForm.classList.add("slide-down");


            modalForm.querySelector("input[name='user_id']").value = data.id;
            modalForm.querySelector("input[name='type']").value = type;

            modalForm.querySelector("button").textContent = type.toUpperCase();

            modalForm.classList.remove("slide-up");
            modal.classList.add("active-modal");
            modalForm.classList.add("slide-down");

        }

        function closeModal() {
            modalForm.classList.remove("slide-down");
            modalForm.classList.add("slide-up");
            setTimeout(() => {
                modalForm.querySelector("input[name='user_id']").value = "";
                modalForm.querySelector("input[name='type']").value = "";
                modal.classList.remove("active-modal");
            }, 1000);
        }
    </script>
@endpush
