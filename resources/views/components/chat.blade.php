@auth
    <div class="chart-container fixed z-[300] bottom-5 right-[8px]">

        <style>
            .thumbnail {
                border: none;
                object-fit: fill;
                display: block;
                width: 35px;
                height: 25px;
                cursor: pointer;
            }

            .thumbnail:hover {
                cursor: pointer;
            }
        </style>

        <div
            class="chat-container mb-[10px] min-w-[280px] w-[350px] max-w-[400px] h-[65dvh] shadow shadow-purple-300 bg-white rounded-md overflow-hidden">
            <div class="chat-head w-full h-[12%] bg-purple-600 rounded-t-md flex justify-between items-center px-4">
                <h1 class="text-white text-[14px] font-[550]">CHAT</h1>

                <div
                    class="cancel-chat text-white bg-black bg-opacity-35 w-[25px] h-[25px] rounded-full flex justify-center items-center text-[13px] cursor-pointer hover:text-red-400 transition-all duration-300 ease-in-out">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            <div class="chat-card w-full h-[88%]">

                <div class="chat-body w-full h-[75%] relative">

                    <div
                        class="chat-error hidden absolute w-[80%] h-fit text-center text-[10px] top-[10px] left-[50%] -translate-x-1/2 bg-red-800 bg-opacity-20 border border-red-600 p-1 text-red-800 rounded-md transition-all duration-300 ease-in-out z-[1]">

                    </div>

                    <div
                        class="chat-success hidden absolute w-[80%] h-fit text-center text-[10px] top-[10px] left-[50%] -translate-x-1/2 bg-green-800 bg-opacity-20 border border-green-600 p-1 text-green-800 rounded-md transition-all duration-300 ease-in-out z-[1]">

                    </div>

                </div>

                <div class="chat-input w-full h-[25%] border-t-gray-100 border-t flex flex-col gap-y-1">
                    <div class="img-previews w-full flex flex-row justify-between gap-x-3 mb-3 pt-2 px-2">

                    </div>

                    <div class="input-field w-full mt-auto relative">
                        <textarea placeholder="Type and press [Enter], max (100)" id="textInput"
                            class="w-full border-none focus:outline-none focus:ring-0 active:outline-none text-[14px] pl-4 pr-[70px] resize-none placeholder:text-[10px]"
                            rows="1" wrap="hard" maxlength="100" autofocus></textarea>

                        <div
                            class="actions absolute flex flex-row gap-x-3 place-items-center w-fit px-1 py-1 right-4 top-1/2 -translate-y-1/2">
                            <label for="file">
                                <i class="fa-solid fa-paperclip text-[17px] text-blue-500 cursor-pointer"></i>
                            </label>
                            <input type="file" name="file" id="file" class="hidden" accept="image/*">

                            {{-- <button type="button" id="sendButton"
                            class="outline-none focus:ring-0 active:outline-none focus:outline-none text-[17px] text-blue-500">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button> --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div
            class="chat-toggle float-right w-[60px] h-[60px] bg-purple-600 hover:bg-purple-500 cursor-pointer rounded-full flex justify-center items-center p-2 text-white text-[24px]">
            <i class="fa-solid fa-headset"></i>
        </div>

    </div>

    @push('script')
        <script>
            const textInput = document.getElementById("textInput");
            const fileInput = document.getElementById("file");
            const imgPreviews = document.querySelector(".img-previews");
            const error = document.querySelector(".chat-error");
            const success = document.querySelector(".chat-success");

            textInput.addEventListener("keydown", sendAction);


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
                        // If no <img> exists, create a new one
                        img = document.createElement("img");
                        img.classList.add("thumbnail");
                        img.width = 35;
                        img.height = 25;
                        imgPreviews.appendChild(img);

                        // Create the delete button
                        const span = document.createElement("span");
                        span.innerHTML = `<i class="fa-solid fa-trash-can text-red-600 text-[13px] cursor-pointer"></i>`;
                        span.classList.add("px-2", "py-[1px]", "rounded-full", "bg-black", "bg-opacity-10",
                            "cursor-pointer", "hover:bg-opacity-5", "clean-image");
                        span.addEventListener("click", () => cleanImage());
                        imgPreviews.appendChild(span);
                    }

                    // Set the image source
                    img.src = e.target.result;
                };

                reader.readAsDataURL(file);
            }



            async function sendAction(event) {

                if ((event.key === "Enter" && !event.shiftKey)) {
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
    @endpush
@endauth
