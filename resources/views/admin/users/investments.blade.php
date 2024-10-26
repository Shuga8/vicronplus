<x-admin-layout :title="$title">

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <x-user-search />


        <div class="modal-container">
            <form action="{{ route('admin.users.investment.edit') }}" class="wallet_form" autocomplete="off" method="POST"
                enctype="multipart/form-data">

                <span
                    class="absolute top-0 right-0 p-2 cursor-pointer material-symbols-outlined close-modal-btn text-red-700"
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

                    <input type="hidden" name="investment_id" id="investment_id"
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
                    <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md">Save</button>
                </div>



            </form>
        </div>

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
                                <td class="px-6 py-4 flex flex-row justify-end gap-x-2">

                                    <button
                                        class="px-4 rounded-md py-1.5 bg-cyan-700 text-white  text-[11px] hover:bg-cyan-600"
                                        onclick="showFormModal({{ json_encode($investment) }})">
                                        <i class="fa-solid fa-pen"></i></button>

                                    @if ($investment->status != 1)
                                        <a href="{{ route('admin.users.investments.update', [$investment->id, $investment->user->id]) }}"
                                            class="text-white px-4 py-1.5 rounded-md bg-orange-500 hover:bg-orange-400 text-[11px]">
                                            End
                                        </a>
                                    @else
                                        <a
                                            class="text-white px-4 py-1.5 rounded-md bg-green-600 hover:bg-green-400 text-[11px]">
                                            Completed
                                        </a>
                                    @endif

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


    @push('scripts')
        <script>
            const modal = document.querySelector(".modal-container");
            const modalForm = modal.querySelector("form");

            function showFormModal(data) {


                modal.querySelector(".modal-title").textContent = `Edit Invesment Amount`;
                modalForm.classList.remove("slide-up");
                modal.classList.add("active-modal");
                modalForm.classList.add("slide-down");


                modalForm.querySelector("input[name='user_id']").value = data.user_id;
                modalForm.querySelector("input[name='investment_id']").value = data.id;
                modalForm.querySelector("input[name='amount']").value = data.amount;



                modalForm.classList.remove("slide-up");
                modal.classList.add("active-modal");
                modalForm.classList.add("slide-down");

            }

            function closeModal() {
                modalForm.classList.remove("slide-down");
                modalForm.classList.add("slide-up");
                setTimeout(() => {

                    modal.classList.remove("active-modal");
                }, 1000);
            }
        </script>
    @endpush

</x-admin-layout>
