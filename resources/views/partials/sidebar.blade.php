<aside class="aside">

    <div class="logo py-3 mb-12">
        <a href="{{ route('user.dashboard') }}"
            class="flex justify-center items-center place-content-center place-items-center">
            <img src="{{ asset('assets/logo.png') }}" alt="VicronPlus" loading="lazy" class="w-20 h-20 object-contain">
        </a>
    </div>

    <div class="close-btn cursor-pointer  text-red-600 text-base p-1" onclick="toggleAsideVisisbilty()">
        <i class="fa-solid fa-xmark"></i>
    </div>


    <div class="links flex flex-col gap-y-1 px-5 w-full h-full">

        <a href="{{ route('user.dashboard') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 place-items-center hover:bg-white hover:bg-opacity-10 sidebar-anchor text-[14px]">
            <i class="fa-solid fa-chart-simple"></i>
            <span>{{ __('sidebar.dashboard') }}</span>
        </a>

        <a href="{{ route('user.investment.new') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-brands fa-gg-circle"></i>
            <span>{{ __('sidebar.invest') }}</span>
        </a>

        <a href="{{ route('user.investment.log') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-file-invoice"></i>
            <span>{{ __('sidebar.investment_logs') }}</span>
        </a>

        <a href="{{ route('user.deposit.new') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-money-bill"></i>
            <span> {{ __('sidebar.deposit') }}</span>
        </a>

        <a href="{{ route('user.deposit.log') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-file-invoice"></i>
            <span>{{ __('sidebar.deposit_logs') }}</span>
        </a>

        <a href="{{ route('user.withdraw.new') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-money-bill-transfer"></i>
            <span>{{ __('sidebar.widthdraw') }}</span>
        </a>

        <a href="{{ route('user.withdraw.log') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-file-invoice"></i>
            <span>{{ __('sidebar.withdrawal_logs') }}</span>
        </a>

        <a href="{{ route('user.transactions') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>{{ __('sidebar.transaction_history') }}</span>
        </a>

        <a href="{{ route('user.referrals') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-cannabis"></i>
            <span>Referrals</span>
        </a>

        <a href="{{ route('user.settings') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-user-gear"></i>
            <span>{{ __('sidebar.settings') }}</span>
        </a>

        <a href="{{ route('user.logout') }}"
            class="py-3 px-3 w-full rounded-md flex flex-row gap-x-2 hover:bg-white hover:bg-opacity-10 sidebar-anchor place-items-center text-[14px]">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>{{ __('sidebar.logout') }}</span>
        </a>


    </div>


</aside>
