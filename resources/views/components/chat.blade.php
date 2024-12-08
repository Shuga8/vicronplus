@push('style')
    <style>
        .thumbnail {
            border: 1px solid #ccc;
            border-radius: 4px;
            object-fit: cover;
            display: block;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .thumbnail:hover {
            cursor: pointer;
        }
    </style>
@endpush

<div class="chart-container fixed z-[300] bottom-5 right-[8px]">
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

            <div class="chat-body w-full h-[75%]">

            </div>

            <div class="chat-input w-full h-[25%] border-t-gray-100 border-t flex flex-col gap-y-1">
                <div class="img-previews flex flex-row gap-x-3 mb-3 pt-2 px-2">

                </div>

                <div class="input-field w-full mt-auto relative">
                    <textarea placeholder="Type and press [Enter]" id="textInput"
                        class="w-full border-none focus:outline-none focus:ring-0 active:outline-none text-[14px] pl-4 pr-[70px] resize-none"
                        rows="1" wrap="hard"></textarea>

                    <div
                        class="actions absolute flex flex-row gap-x-3 place-items-center w-fit px-1 py-1 right-4 top-1/2 -translate-y-1/2">
                        <label for="file">
                            <i class="fa-solid fa-paperclip text-[17px] text-blue-500 cursor-pointer"></i>
                        </label>
                        <input type="file" name="file" id="file" multiple class="hidden" accept="image/*">

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
    <script type="text/javascript">
        const textInput = document.getElementById("textInput");
        const fileInput = document.getElementById("file");
        const imgPreviews = document.querySelector(".img-previews");

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
                }
            }
        });


        fileInput.addEventListener("change", (event) => {
            Array.from(event.target.files).forEach((file) => {
                addThumbnail(file);
            });
        });


        function addThumbnail(file) {
            if (!file.type.startsWith("image/")) return;

            console.log(fileInput.files.length);

            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("thumbnail");
                img.width = 35;
                img.height = 35;
                imgPreviews.appendChild(img);
            };
            reader.readAsDataURL(file);
        }

        function sendAction(event) {

            if ((event.key === "Enter" && !event.shiftKey)) {
                event.preventDefault();
                console.log("Send Message:", textInput.value);
                textInput.value = "";
                imgPreviews.innerHTML = "";
                fileInput.value = "";
            }
        }
    </script>
@endpush
