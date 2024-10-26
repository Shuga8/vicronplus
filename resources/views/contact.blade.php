<x-page-layout :title="$title" :showHeader="true">

    <section class="hero">
        <div id="particles-js"></div>

        <div class="body">
            <div class="body flex justify-center place-items-center flex-wrap">

                <div class="text px-3">
                    <h3 class="animate__animated animate__bounceInUp text-white uppercase text-center">Contact Us
                    </h3>

                </div>
            </div>
    </section>

    <div class="contact-form  w-full">

        <h3 class=" text-center mb-3">Send Us A Message</h3>

        <hr>


        <form action="/send-mail" method="POST" class="w-full py-[30px] px-4 md:px-24">
            @csrf

            <div class="large-group grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">

                <div class="grow shrink">

                    <label for="firstname" class="text-slate-700 uppercase font-semibold">
                        Firstname
                    </label>
                    <input type="text" id="firstname" name="firstname"
                        class="w-full py-2 rounded-sm px-2 border border-gray-500" required autocomplete="off">

                </div>

                <div class="grow shrink">

                    <label for="lastname" class="text-slate-700 uppercase font-semibold">
                        Lastname
                    </label>
                    <input type="text" id="lastname" name="lastname"
                        class="w-full py-2 rounded-sm px-2 border border-gray-500" required autocomplete="off">

                </div>

            </div>

            <div class="large-group grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 my-4 md:my-8">

                <div class="grow shrink">

                    <label for="firstname" class="text-slate-700 uppercase font-semibold">
                        Email
                    </label>
                    <input type="email" id="email" name="email"
                        class="w-full rounded-sm py-2 px-2 border border-gray-500" required autocomplete="off">

                </div>

                <div class="grow shrink">

                    <label for="subject" class="text-slate-700 uppercase font-semibold">
                        Subject
                    </label>
                    <input type="text" id="subject" name="subject"
                        class="w-full rounded-sm py-2 px-2 border border-gray-500" required autocomplete="off">

                </div>

            </div>

            <div class="group">
                <label for="message" class="text-slate-700 uppercase font-semibold">
                    Message
                </label>
                <textarea name="message" id="message" class="w-full min-h-[300px] rounded-sm" required autocomplete="off"></textarea>
            </div>

            <button
                class="w-full mt-10 bg-primary-700 text-white hover:bg-primary-600 py-3 flex flex-row justify-center rounded-sm place-items-center gap-x-1">Send
                <i class="fa-solid fa-paper-plane"></i></button>
        </form>

    </div>

</x-page-layout>
