<header class="w-full py-3 px-2 bg-[#011E52] flex flex-row justify-between">
    <div class="py-3 px-3 cursor-pointer toggle-menu" onclick="toggleAsideVisisbilty()">
        <span class="material-symbols-outlined text-white">
            menu
        </span>

    </div>

    <div class="flex flex-row gap-x-4 place-items-center">
        <div>


            <select name="locale-language" id="locale-language"
                class="bg-transparent text-cyan-500 border-cyan-600 focus:outline-none outline-none active:outline-none active:border-none focus:border-none text-[11px]"
                aria-label="Select Language">
                <option value="en-uk">
                    english (UK)
                </option>

                <option value="en-us">
                    english (US)
                </option>
                <option value="de">german</option>
                <option value="fr">french</option>
                <option value="ar">arabic</option>
            </select>

        </div>
        <a href="{{ route('user.investment.new') }}"
            class="py-2.5 px-3 border-x border-y border-gray-50 text-white hover:bg-[#011E52] hover:text-white rounded-md flex flex-row gap-x-1 place-items-center"><span
                class="material-symbols-outlined text-xs ">
                currency_exchange
            </span><span class="text-sm uppercase font-semibold">Invest</span></a>
        <div class="">
            <div class="cursor-pointer flex flex-row place-items-center gap-x-1" onclick="toggleHeaderDrop()">
                <span class="material-symbols-outlined text-white">
                    account_circle
                </span>
                <span class="text-[11px] text-white">{{ auth()->user()->username }}</span>
                <span class="material-symbols-outlined text-white">
                    keyboard_arrow_down
                </span>
            </div>

            <div id="header-drop"
                class="hidden fixed z-10 top-[70px] right-2 w-40 rounded-md bg-white shadow-slate-600  shadow-lg">
                <a href="{{ route('user.settings') }}"
                    class="py-3 px-3 w-full flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 text-primary-600"><span
                        class="material-symbols-outlined text-sm">
                        manage_accounts
                    </span> <span class="text-sm">Settings</span></a>

                <a href="{{ route('user.logout') }}"
                    class="py-3 px-3 w-full r flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 text-primary-600"><span
                        class="material-symbols-outlined text-sm">
                        logout
                    </span> <span class="text-sm">Logout</span></a>
            </div>
        </div>
    </div>
</header>

<x-alerts />

@push('scripts')
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: "{{ session('locale') }}" ?? "en-uk"
                },
                'google_translate_element'
            );
        }
    </script>
    <script>
        const presetLanguage = "{{ session()->get('locale') }}";
        document.querySelector("#locale-language").value = presetLanguage ?? "en-uk";

        document.querySelector("#locale-language").addEventListener("change", function(e) {
            const lang = e.target.value;
            window.location.href = `/lang/${lang}`;
        });
    </script>
@endpush
