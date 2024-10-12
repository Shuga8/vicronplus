<div class="w-full py-4 px-2 flex justify-end">

    <form class="min-w-72">
        <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4  text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" name="search"
                class="block w-full px-4 py-3 ps-10 text-xs border  rounded-lg bg-white border-gray-600 placeholder-gray-400 text-gray-700 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Search username, email..." required autocomplete="username"
                value="{{ request('search') ?? '' }}" />

            <button type="submit"
                class="text-white absolute end-1.5 bottom-2  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-2 py-1 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Search</button>
        </div>
    </form>

</div>
