<div class="w-full py-4 px-2 flex justify-end">
    <button
        class="px-3 py-2 bg-transparent border rounded-md border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white flex flex-row gap-x-1 place-items-center text-sm"
        onclick="showNewForm">
        <span class="material-symbols-outlined">
            add_chart
        </span>
        <span class="uppercase text-xs font-semibold">
            new plan
        </span>
    </button>
</div>

<div class="modal-container active-modal">
    <form action="" class="slide-down" class="plan_form" autocomplete="off">

        <span class="absolute top-0 right-0 p-2 cursor-pointer material-symbols-outlined close-modal-btn text-red-700">
            cancel
        </span>


        <p class="text-center text-blue-700 text-xl mb-3 font-semibold modal-title uppercase">New Investment Plan</p>
        @csrf
        <div class="pt-6 pb-2">
            <label for="plan_name" class="text-gray-700 text-sm flex flex-row gap-x-1"><span class="font-semibold">Plan
                    name</span><span class="text-red-600">*</span></label>
            <input type="text" name="plan_name" id="plan_name"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                autocomplete="plan_name" placeholder="name for plan">
        </div>

        <div class="py-2">
            <label for="minimum" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Minimum</span><span class="text-red-600">*</span></label>
            <input type="number" name="minimum" id="minimum"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="min usd" autocomplete="minimum">
        </div>

        <div class="py-2">
            <label for="maximum" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Maximum</span><span class="text-red-600">*</span></label>
            <input type="number" name="maximum" id="maximum"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="max usd" autocomplete="maximum">
        </div>

        <div class="py-2">
            <label for="percentage" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Interest Percentage</span><span class="text-red-600">*</span></label>
            <input type="number" name="percentage" id="percentage"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="%" autocomplete="percentage">
        </div>

        <div class="py-2">
            <label for="capital_return" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Capital Return</span><span class="text-red-600">*</span></label>
            <select name="capital_return" id="capital_return"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2">
                <option value disabled selected>select capital return state (on / off)</option>
                <option value="on">ON</option>
                <option value="off">OFF</option>
            </select>
        </div>

        <div class="py-2">
            <label for="duration" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Duration</span><span class="text-red-600">*</span></label>
            <input type="number" name="duration" id="duration"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2"
                placeholder="duration" autocomplete="duration">
        </div>

        <div class="py-2">
            <label for="unit" class="text-gray-700 text-sm flex flex-row gap-x-1"><span
                    class="font-semibold">Unit</span><span class="text-red-600">*</span></label>
            <select name="unit" id="unit"
                class="w-full outline-none focus:outline-none border border-gray-600 rounded-sm px-3 py-2 text-gray-600 mt-2">
                <option value="hour">Hour</option>
                <option value="day">Day</option>
                <option value="month">Month</option>
                <option value="year">Year</option>
            </select>
        </div>

        <div class="py-2 w-full flex justify-end">
            <button class="px-6 py-2 bg-blue-700 text-white modal-btn rounded-md">Save</button>
        </div>
    </form>
</div>

@push('scripts')
    <script></script>
@endpush