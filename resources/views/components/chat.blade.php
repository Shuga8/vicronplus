@auth
    <div
        class="chart-wrapper fixed z-[0] bottom-[80px] right-[9px] w-[500px] max-w-[95%] h-[80dvh] rounded-md bg-transparent">

        <style>
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

            .chat-body {
                scroll-behavior: smooth;
            }

            .chat-body::-webkit-scrollbar {
                width: 2px;
                height: 0px;
                margin-right: 10px;
            }

            .chat-body::-webkit-scrollbar-thumb {
                background: #7e3af2;
            }
        </style>

        <div
            class="chat-container mb-[100px] w-full h-full bg-white rounded-md overflow-hidden hidden transition-all ease-in-out duration-300">
            <div class="chat-head w-full h-[12%] bg-purple-700 rounded-t-md flex justify-between items-center px-4">
                <h1 class="text-white text-[14px] font-[550]">CHAT</h1>

                <div class="cancel-chat text-white bg-black bg-opacity-35 w-[25px] h-[25px] rounded-full flex justify-center items-center text-[13px] cursor-pointer hover:text-red-400 transition-all duration-300 ease-in-out"
                    onclick="closeChat()">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <div class="chat-card w-full h-[88%]">

                <div
                    class="chat-body w-full h-[75%] relative bg-[#ededed] pt-[12px] pb-[4px] px-3 flex flex-col gap-y-3 overflow-x-hidden overflow-y-scroll">

                    <div
                        class="chat-error hidden absolute w-[80%] h-fit text-center text-[10px] top-[10px] left-[50%] -translate-x-1/2 bg-red-800 bg-opacity-80 border border-red-600 p-1 text-white rounded-md transition-all duration-300 ease-in-out z-[1]">

                    </div>

                    <div
                        class="chat-success hidden absolute w-[80%] h-fit text-center text-[10px] top-[10px] left-[50%] -translate-x-1/2 bg-green-800 bg-opacity-80 border border-green-600 p-1 text-white rounded-md transition-all duration-300 ease-in-out z-[1]">

                    </div>
                    {{-- 
                    <div
                        class="incoming self-start tracking-widest max-w-[80%] px-[12px] py-[9px] rounded-[7px_7px_7px_0px] bg-white text-primary-700 font-[500] text-[11px] h-fit text-wrap">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, quasi?
                    </div>
                    <div
                        class="outgoing self-end tracking-widest max-w-[80%] px-[12px] py-[9px] rounded-[7px_7px_0px_7px] bg-primary-700 text-white text-[11px] h-fit text-wrap">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, quasi?
                    </div>


                    <div
                        class="incoming file caption self-start tracking-widest max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-white text-primary-700 font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                        <a href="">
                            <img src="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" alt=""
                                class="w-[100%] max-h-[150px] object-cover block mx-auto">
                        </a>
                        <div class="text px-[8px] py-[12px]">
                            Lorem, ipsum.
                        </div>
                    </div>

                    <div
                        class="outgoing file caption self-end tracking-widest max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-primary-700 text-white text-[11px] rounded-[0px_0px_0px_7px] h-fit text-wrap">
                        <a href="">
                            <img src="https://ocr.space/Content/Images/receipt-ocr-scanning-result.webp" alt=""
                                class="w-[100%] max-h-[150px] object-cover block mx-auto">
                        </a>
                        <div class="text px-[8px] py-[12px]">
                            Lorem, ipsum.
                        </div>
                    </div> --}}

                    <div class="messages w-full flex flex-col gap-y-3">

                    </div>



                </div>

                <div class="chat-input w-full h-[25%] border-t-gray-100 border-t flex flex-col gap-y-1">
                    <div
                        class="img-previews w-full flex flex-row justify-between gap-x-3 mb-3 pt-2 px-2 place-items-center">

                    </div>

                    <div class="input-field w-full mt-auto relative">
                        <textarea placeholder="Type and press [Enter], max (100)" id="textInput"
                            class="w-full border-none focus:outline-none focus:ring-0 active:outline-none text-[14px] pl-4 pr-[70px] resize-none placeholder:text-[10px] md:placeholder:text-[14px] text-gray-800"
                            rows="1" wrap="hard" maxlength="100" autofocus></textarea>

                        <div
                            class="actions absolute flex flex-row gap-x-3 place-items-center w-fit px-1 py-1 right-4 top-1/2 -translate-y-1/2">
                            <label for="file">
                                <i class="fa-solid fa-paperclip text-[20px] text-blue-500 cursor-pointer"></i>
                            </label>
                            <input type="file" name="file" id="file" class="hidden" accept="image/*">

                            <button type="button" id="sendButton"
                                class="outline-none focus:ring-0 active:outline-none focus:outline-none text-[20px] text-blue-500">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div
            class="chat-toggle w-[60px] h-[60px] bg-purple-600 hover:bg-purple-500 cursor-pointer rounded-full flex justify-center items-center p-2 text-white text-[24px] absolute bottom-[-65px] right-2 z-[301]">
            <i class="fa-solid fa-headset"></i>
        </div>

    </div>

    @push('scripts')
        <script>
            const textInput = document.getElementById("textInput");
            const fileInput = document.getElementById("file");
            const imgPreviews = document.querySelector(".img-previews");
            const error = document.querySelector(".chat-error");
            const success = document.querySelector(".chat-success");
            const chatContainer = document.querySelector(".chat-container ");
            const chatWrapper = document.querySelector(".chart-wrapper ");
            const chatToggle = document.querySelector(".chat-toggle");
            const sendBtn = document.querySelector("#sendButton");


            chatToggle.addEventListener("click", closeChat)

            function closeChat() {
                if (chatContainer.classList.contains("hidden")) {
                    chatContainer.classList.replace("hidden", "block");
                    chatWrapper.classList.replace("z-[0]", "z-[300]")
                    chatToggle.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
                } else {
                    chatContainer.classList.replace("block", "hidden");
                    chatToggle.innerHTML = `<i class="fa-solid fa-headset"></i>`;
                    chatWrapper.classList.replace("z-[300]", "z-[0]")
                }
            }

            textInput.addEventListener("keydown", sendAction);
            sendBtn.addEventListener("click", sendAction);


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



            async function sendAction(event) {

                if ((event.key === "Enter" && !event.shiftKey) || event.currentTarget == sendBtn) {
                    event.preventDefault();
                    clearError();
                    clearSuccess();

                    const myHeaders = new Headers();
                    myHeaders.append("X-CSRF-TOKEN", "{{ csrf_token() }}");

                    const formData = new FormData();
                    formData.append("message", textInput.value);
                    if (fileInput.value !== "") {
                        formData.append("file", fileInput.files[0]);
                    }

                    const response = await fetch("{{ route('user.chat.send') }}", {
                        method: "POST",
                        headers: myHeaders,
                        body: formData
                    })

                    const result = await response.json();

                    if (result.error) {
                        flashError(result.error);
                    } else if (result.success) {
                        flashSuccess(result.success);
                    }
                    textInput.value = "";
                    imgPreviews.innerHTML = "";
                    fileInput.value = "";
                }
            }

            async function flashError(msg) {
                error.textContent = msg.toLowerCase();
                error.classList.replace("hidden", 'block');

                await clearError();
            }

            async function flashSuccess(msg) {
                success.textContent = msg.toLowerCase();
                success.classList.replace("hidden", 'block');
                await clearSuccess();
            }

            async function clearSuccess() {
                setTimeout(() => {
                    success.classList.replace("block", "hidden");
                    success.textContent = "";
                }, 1400);
            }

            async function clearError() {
                setTimeout(() => {
                    error.classList.replace("block", "hidden");
                    error.textContent = "";
                }, 1400);
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
        <script>
            let count = 0;
            async function fetchChats() {
                const messages = chatContainer.querySelector(".messages");
                const myHeaders = new Headers();
                myHeaders.append("X-CSRF-TOKEN", "{{ csrf_token() }}");

                let url = "{{ route('user.chat.all', ':id') }}";
                url = url.replace(":id", "{{ auth()->user()->id }}");

                const request = await fetch(url, {
                    method: "GET",
                    headers: myHeaders,
                });

                const response = await request.json();

                messages.innerHTML = "";
                for (let chat of response) {
                    if (chat.from !== null) {

                        if (chat.file == null) {
                            messages.innerHTML += `
                            <div
                                class="outgoing self-end tracking-widest max-w-[80%] px-[12px] py-[9px] rounded-[7px_7px_0px_7px] bg-primary-700 text-white text-[11px] h-fit text-wrap">
                                ${chat.message ?? ''}
                            </div>
                        `;
                        } else {
                            messages.innerHTML += `
                            <div
                                class="outgoing file caption self-end tracking-widest max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-primary-700 text-white text-[11px] rounded-[0px_0px_0px_7px] h-fit text-wrap">
                                <a href="{{ config('app.url') }}/storage/${chat.file}" target="_blank">
                                    <img src="{{ config('app.url') }}/storage/${chat.file}" alt=""
                                        class="w-[100%] max-h-[150px] object-cover block mx-auto">
                                </a>
                                <div class="text px-[8px] py-[12px]">
                                    ${chat.message ?? ''}
                                </div>
                            </div> 
                            `;
                        }
                    } else if (chat.to !== null) {
                        if (chat.file == null) {
                            messages.innerHTML += `
                            <div
                                class="incoming self-start tracking-widest max-w-[80%] px-[12px] py-[9px] rounded-[7px_7px_7px_0px] bg-white text-primary-700 font-[500] text-[11px] h-fit text-wrap">
                                ${chat.message ?? ''}
                            </div>
                        `;
                        } else {
                            messages.innerHTML += `
                            <div
                                class="incoming file caption self-start tracking-widest max-w-[80%] px-[0px] pt-[0px] pb-[0px] bg-white text-primary-700 font-[500] text-[11px] rounded-[0px_0px_7px_0px] h-fit text-wrap">
                                <a href="{{ config('app.url') }}/storage/${chat.file}" target="_blank">
                                    <img src="{{ config('app.url') }}/storage/${chat.file}" alt=""
                                        class="w-[100%] max-h-[150px] object-cover block mx-auto">
                                </a>
                                <div class="text px-[8px] py-[12px]">
                                    ${chat.message ?? ''}
                                </div>
                            </div> 
                            `;
                        }
                    }
                }
                if (count < 2) {
                    scrollToBottom();
                }
                count += 1;
                await fetchChats();
            }

            function scrollToBottom() {
                const chatBody = document.querySelector(".chat-body");
                if (chatBody) {
                    chatBody.scrollTop = chatBody.scrollHeight;
                }
            }

            fetchChats();
        </script>
    @endpush
@endauth
