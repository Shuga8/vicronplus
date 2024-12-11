<x-admin-layout :title="$title">

    @push('style')
        <style type="text/css">
            .chat-container {
                scroll-behavior: smooth
            }

            .chat-container::-webkit-scrollbar {
                width: 5px;
                height: 0px;
                margin-right: 10px;
            }

            .chat-container::-webkit-scrollbar-thumb {
                background: #02477f;
            }
        </style>
    @endpush

    <div class="content px-2 py-6 md:px-3">
        <h3 class="text-lg md:px-0 px-2 font-bold capitalize text-gray-800 ">{{ $title }}</h3>

        <hr class="border border-gray-200 w-full mx-auto" />

        <div
            class="chat-container w-full shadow-[inset_2px_2px_5px_#eee,_inset_-2px_-2px_5px_#eee] px-10 py-8 mt-7 overflow-y-auto h-[60dvh] flex flex-col gap-y-4">

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">You</span>

                <div
                    class="you relative bg-primary-800 w-[fit-content] max-w-[80%] text-white px-8 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>

                <div
                    class="user relative bg-white w-[fit-content] max-w-[80%] text-primary-600 border border-gray-400 px-6 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>

                <div
                    class="user relative bg-white w-[fit-content] max-w-[80%] text-primary-600 border border-gray-400 px-6 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>

                <div
                    class="user relative bg-white w-[fit-content] max-w-[80%] text-primary-600 border border-gray-400 px-6 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">You</span>

                <div
                    class="you relative bg-primary-800 w-[fit-content] max-w-[80%] text-white px-8 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-2 px-2 text-[10px] text-gray-600 uppercase font-bold">You</span>

                <div
                    class="you relative bg-primary-800 w-[fit-content] max-w-[80%] text-white px-8 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>



        </div>

    </div>

</x-admin-layout>
