<header class="w-full py-3 px-2 bg-[#011E52] flex flex-row justify-between">
    <div class="py-3 px-3 cursor-pointer toggle-menu" onclick="toggleAsideVisisbilty()">
        <i class="fa-solid fa-bars text-white"></i>

    </div>

    @push('style')
        <style>
            .elfsight-app-1b928f5d-d2cc-46aa-bdd0-aaad971e83e0>div:first-child>a:first-child {
                visibility: hidden !important;
                display: none !important;
            }
        </style>
    @endpush

    <div class="flex flex-row gap-x-4 place-items-center">
        <div>


            <select name="locale-language" id="locale-language"
                class="bg-transparent hidden text-cyan-500 border-cyan-600 focus:outline-none outline-none active:outline-none active:border-none focus:border-none text-[11px]"
                aria-label="Select Language">
                <option value="en">
                    english
                </option>
                <option value="de">german</option>
                <option value="fr">french</option>
                <option value="ar">arabic</option>
            </select>

            <script src="https://static.elfsight.com/platform/platform.js" importance="high" async></script>
            <div class="elfsight-app-1b928f5d-d2cc-46aa-bdd0-aaad971e83e0 text-white" data-elfsight-app-lazy
                id="elfsight"></div>

        </div>
        <a href="{{ route('user.investment.new') }}"
            class="py-2.5 px-3 border-x border-y border-gray-50 text-white hover:bg-[#011E52] hover:text-white rounded-md flex flex-row gap-x-1 place-items-center text-[11px]">
            <i class="fa-brands fa-gg-circle"></i>
            <span class="uppercase">Invest</span>
        </a>
        <div class="">
            <div class="cursor-pointer flex flex-row place-items-center gap-x-1.5 px-2" onclick="toggleHeaderDrop()">
                <i class="fa-regular fa-user text-white text-[12px]"></i>
                <span class="text-[12px] text-white">{{ auth()->user()->username }}</span>
                <i class="fa-solid fa-angle-down text-white text-[12px]"></i>
            </div>

            <div id="header-drop"
                class="hidden absolute z-10 top-[70px] right-2 w-40 rounded-md bg-white shadow-slate-600  shadow-lg">
                <a href="{{ route('user.settings') }}"
                    class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 text-primary-600 place-items-center text-[12px]">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>Settings</span>
                </a>

                <a href="{{ route('user.logout') }}"
                    class="py-3 px-3 w-full r flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 text-primary-600 place-items-center text-[12px]">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="text-sm">Logout</span>
                </a>
            </div>
        </div>
    </div>
</header>

<x-alerts />

@push('scripts')
    <script>
        const presetLanguage = "{{ session()->get('locale') }}";
        document.querySelector("#locale-language").value = presetLanguage ?? "en";

        document.querySelector("#locale-language").addEventListener("change", function(e) {
            const lang = e.target.value;
            window.location.href = `/lang/${lang}`;
        });
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(e) {
            setTimeout(() => {
                const elf = document.querySelector("#elfsight");
                const first = elf.querySelector("div:first-child");
                elf.querySelector(".eapps-widget-toolbar").style.display = 'none';
                first.querySelector("a").style.display = 'none'
            }, 3000);
        })
    </script>
@endpush
