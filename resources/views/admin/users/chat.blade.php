<x-admin-layout :title="$title">

    @push('style')
        <style type="text/css">
            .thumbnail {
                border: none;
                object-fit: fill;
                display: block;
                width: 55px;
                height: 55px;
                cursor: pointer;
            }

            .thumbnail:hover {
                cursor: pointer;
            }

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

            {{-- <div class="block">
                <span class="mb-3 px-2 text-[10px] text-primary-600 uppercase font-bold">You</span>

                <div
                    class="you relative bg-primary-800 w-[fit-content] max-w-[80%] text-white px-8 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block">
                <span class="mb-3 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>

                <div
                    class="user relative bg-white w-[fit-content] max-w-[80%] text-primary-600 border border-gray-400 px-6 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, explicabo?
                </div>
            </div>

            <div class="block figure">
                <span class="mb-3 px-2 text-[10px] text-primary-600 uppercase font-bold">You</span>
                <div
                    class="you file caption self-start tracking-widest w-[300px] max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-blue-700 text-white font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                    <a href="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" target="_blank">
                        <img src="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" alt=""
                            class="w-[100%] max-h-[150px] object-cover block mx-auto">
                    </a>
                    <div class="text px-[8px] py-[12px]">
                        Lorem, ipsum.
                    </div>
                </div>
            </div>

            <div class="block figure">
                <span class="mb-3 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>
                <div
                    class="you file caption self-start tracking-widest w-[300px] max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-gray-100 text-primary-700 font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                    <a href="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" target="_blank">
                        <img src="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" alt=""
                            class="w-[100%] max-h-[150px] object-cover block mx-auto">
                    </a>
                    <div class="text px-[8px] py-[12px]">
                        Lorem, ipsum.
                    </div>
                </div>
            </div> --}}

            @unless ($chats->count() == 0)
                @foreach ($chats as $chat)
                    @if ($chat->from !== null)
                        @if ($chat->file == null)
                            <div class="block">
                                <span
                                    class="mb-3 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>
                                <div
                                    class="user relative bg-white w-[fit-content] max-w-[80%] text-primary-600 border border-gray-400 px-6 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">
                                    {!! $chat->message ?? '' !!}
                                </div>
                            </div>
                        @else
                            <div class="block figure">
                                <span
                                    class="mb-3 px-2 text-[10px] text-gray-600 uppercase font-bold">{{ $user->username }}</span>
                                <div
                                    class="you file caption self-start tracking-widest w-[300px] max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-gray-100 text-primary-700 font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                                    <a href="{{ config('app.url') }}/storage/{{ $chat->file }}" target="_blank">
                                        <img src="{{ config('app.url') }}/storage/{{ $chat->file }}" alt=""
                                            class="w-[100%] max-h-[150px] object-cover object-center block mx-auto">
                                    </a>
                                    <div class="text px-[8px] py-[12px]">
                                        {!! $chat->message ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif

                    @if ($chat->to !== null)
                        @if ($chat->file == null)
                            <div class="block">
                                <span class="mb-3 px-2 text-[10px] text-primary-600 uppercase font-bold">You</span>

                                <div
                                    class="you relative bg-primary-800 w-[fit-content] max-w-[80%] text-white px-8 py-4 text-[14px] tracking-widest rounded-[10px_10px_10px_0px]">

                                    {!! $chat->message ?? '' !!}
                                </div>
                            </div>
                        @else
                            <div class="block figure">
                                <span class="mb-3 px-2 text-[10px] text-primary-600 uppercase font-bold">You</span>
                                <div
                                    class="you file caption self-start tracking-widest w-[300px] max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-blue-700 text-white font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                                    <a href="{{ config('app.url') }}/storage/{{ $chat->file }}" target="_blank">
                                        <img src="{{ config('app.url') }}/storage/{{ $chat->file }}" alt=""
                                            class="w-[100%] max-h-[150px] object-cover object-center  block mx-auto">
                                    </a>
                                    <div class="text px-[8px] py-[12px]">
                                        {!! $chat->message ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            @else
            @endunless




        </div>

        <div class="chat-input w-full border-t-gray-200 border-t flex flex-col gap-y-1 mt-2">
            <div class="img-previews w-full flex flex-row justify-between gap-x-3 mb-3 pt-2 px-2 place-items-center">

            </div>

            <div class="input-field w-full mt-auto relative">
                <form action="{{ route('admin.chat.send') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                    <textarea placeholder="Type and press [Send], max (100)" id="textInput"
                        class="w-full border-none focus:outline-none focus:ring-0 active:outline-none text-[14px] pl-4 pr-[70px] resize-none placeholder:text-[10px] md:placeholder:text-[14px] text-slate-600"
                        rows="1" wrap="hard" maxlength="100" autofocus name="message"></textarea>

                    <div
                        class="actions absolute flex flex-row gap-x-4 place-items-center w-fit px-1 py-1 right-4 top-1/2 -translate-y-1/2">
                        <label for="file">
                            <i class="fa-solid fa-paperclip text-[20px] text-blue-500 cursor-pointer"></i>
                        </label>
                        <input type="file" name="file" id="file" class="hidden" accept="image/*">

                        <button type="submit" id="sendButton"
                            class="outline-none focus:ring-0 active:outline-none focus:outline-none text-[20px] text-blue-500">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @push('scripts')
        <script type="text/javascript">
            const textInput = document.getElementById("textInput");
            const fileInput = document.getElementById("file");
            const imgPreviews = document.querySelector(".img-previews");


            textInput.addEventListener("paste", (event) => {
                const items = (event.clipboardData || event.originalEvent.clipboardData).items;
                for (const item of items) {
                    if (item.kind === "file") {
                        const file = item.getAsFile();
                        addThumbnail(file);
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(file);
                        fileInput.files = dataTransfer.files;
                        console.log(fileInput.files);
                    }
                }
            });


            fileInput.addEventListener("change", (event) => {

                addThumbnail(event.target.files[0]);

            });

            function addThumbnail(file) {
                if (!file.type.startsWith("image/")) return;

                const reader = new FileReader();
                reader.onload = (e) => {
                    let img = imgPreviews.querySelector("img");
                    if (!img) {
                        img = document.createElement("img");
                        img.classList.add("thumbnail");
                        img.width = 55;
                        img.height = 55;
                        imgPreviews.appendChild(img);
                        const span = document.createElement("span");
                        span.innerHTML = `<i class="fa-solid fa-trash-can text-red-600 text-[13px] cursor-pointer"></i>`;
                        span.classList.add("px-2", "py-[1px]", "rounded-full", "bg-black", "bg-opacity-10",
                            "cursor-pointer", "hover:bg-opacity-5", "clean-image");
                        span.addEventListener("click", () => cleanImage());
                        imgPreviews.appendChild(span);
                    }
                    img.src = e.target.result;
                };

                reader.readAsDataURL(file);
            }

            function cleanImage() {
                const span = imgPreviews.querySelector("span");
                const img = imgPreviews.querySelector("img");
                if (span) {
                    imgPreviews.removeChild(span);
                }
                if (img) {
                    imgPreviews.removeChild(img);
                }
                fileInput.value = "";
            }
        </script>
    @endpush


</x-admin-layout>
