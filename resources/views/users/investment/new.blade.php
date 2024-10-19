<x-layout :title="$title">


    <div class="modal-container">
        <form action="{{ route('user.investment.store') }}" class="plan_form" autocomplete="off" method="POST">

            <span
                class="absolute top-0 right-0 p-2 cursor-pointer material-symbols-outlined close-modal-btn text-red-700"
                onclick="closeModal()">
                cancel
            </span>


            <p class="text-center text-blue-700 text-xl mb-3 font-semibold modal-title uppercase">Buy Investment</p>
            @csrf
            <div class="">

                <input type="hidden" name="plan_id" id="plan_id"
                    class="w-full outline-none focus:outline-none border border-gray-00 rounded-sm px-3 py-2 text-gray-900 mt-2">
            </div>

            <div class="py-2">
                <label for="name" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                        class="font-semibold">Plan</span><span class="text-red-600">*</span></label>
                <input type="text" name="name" id="name"
                    class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-900 mt-2"
                    placeholder="plan name" autocomplete="plan name" disabled="true">
            </div>

            <div class="py-2">
                <label for="amount" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                        class="font-semibold">Amount</span><span class="text-red-600">*</span></label>
                <input type="number" name="amount" id="amount"
                    class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-900 mt-2"
                    placeholder="amount" autocomplete="amount">
            </div>


            <div class="py-2 w-full flex justify-end">
                <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md">BUY</button>
            </div>
        </form>
    </div>

    <h2 class="text-white text-xl capitalize font-semibold mt-3">Choose a plan</h2>

    <div class="plans flex gap-x-4 gap-y-6 py-4 px-3 flex-wrap">


        @foreach ($plans as $plan)
            <div
                class="min-w-72 bg-white shadow-lg text-slate-100 border border-slate-300 grid grid-col-2 p-4 gap-4 rounded-lg basis-auto grow shrink">
                <div class="col-span-2 text-lg font-bold uppercase rounded-md text-violet-600">
                    {{ $plan->plan_name }}
                </div>
                <div class="col-span-2 rounded-md">
                    <div class="list my-1">

                        <div class="list__check flex flex-row gap-x-3 place-items-center mb-2">
                            <i class="fa-regular fa-circle-check text-cyan-600 "></i>
                            <span class="text-sm text-cyan-600">Minimum {{ $plan->minimum }} USD</span>
                        </div>

                        <div class="list__check flex flex-row gap-x-3 place-items-center mb-2">
                            <i class="fa-regular fa-circle-check text-cyan-600"></i>
                            <span class="text-sm text-cyan-600">Maximum {{ $plan->maximum }} USD</span>
                        </div>

                        <div class="list__check flex flex-row gap-x-3 place-items-center mb-2">
                            <i class="fa-regular fa-circle-check text-cyan-600"></i>
                            <span class="text-sm text-cyan-600">Capital Return <span
                                    class="py-[3px] px-2 rounded-md text-white {{ $plan->capital_return == 'on' ? 'bg-green-600' : 'bg-red-600' }}">{{ $plan->capital_return }}
                                </span></span>
                        </div>

                        <div class="list__check flex flex-row gap-x-3 place-items-center">
                            <i class="fa-regular fa-circle-check text-cyan-600"></i>
                            <span class="text-sm text-cyan-600">{{ $plan->percentage }}% payback after
                                {{ $plan->duration }} {{ $plan->unit }}s</span>
                        </div>


                    </div>
                </div>
                <div class="col-span-1">
                    <button
                        class="rounded-md bg-primary-700 hover:bg-primary-500 hover:text-slate-100 duration-300 py-2 px-8"
                        onclick="showFormModal({{ json_encode($plan) }})">
                        BUY
                        {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                    </button>
                </div>


            </div>
        @endforeach




    </div>

    @push('scripts')
        <script>
            const modal = document.querySelector(".modal-container");
            const modalForm = modal.querySelector("form");

            function showFormModal(data = null) {
                if (data == null) {
                    modalForm.classList.remove("slide-up");
                    modal.classList.add("active-modal");
                    modalForm.classList.add("slide-down");
                } else {
                    modalForm.classList.remove("slide-up");
                    modal.classList.add("active-modal");
                    modalForm.classList.add("slide-down");
                    modalForm.querySelector("input[name='name']").value = data.plan_name
                    modalForm.querySelector("input[name='plan_id']").value = data.id
                    modalForm.setAttribute("action", action);

                }
            }

            function closeModal() {
                modalForm.classList.remove("slide-down");
                modalForm.classList.add("slide-up");
                setTimeout(() => {
                    modalForm.querySelector("input[name='name']").value = ""
                    modalForm.querySelector("input[name='plan_id']").value = ""
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

</x-layout>
