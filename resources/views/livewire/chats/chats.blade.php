<div x-data="{ open: false }" class="relative">
    <!-- chat button mobile -->
    <button @click="open = !open"
        class="md:hidden fixed top-4 right-4 z-50 bg-[#361619] px-2 py-1 rounded-lg cursor-pointer">
        <ion-icon name="chatbubble-ellipses" class="text-white text-3xl "></ion-icon>
    </button>

    <!-- main content -->
    <div class="flex flex-col gap-2 xl:gap-10 xl:justify-center md:items-center w-full mt-2">
        <!-- aside -->
        <div
            class="bg-[#361619] rounded-4xl text-white md:mt-1 md:pb-20 xl:pb-0 h-16 md:h-full xl:h-[650px] flex flex-row md:flex-col items-center justify-between w-full md:w-24 hidden md:flex">
            <div class="flex flex-row md:flex-col items-center justify-center gap-2 md:gap-6">
                <div class="pl-4 md:pl-0 md:mt-10 flex justify-center items-center">
                    <div class="bg-white size-10 md:size-14 rounded-full flex justify-center items-center">
                        <ion-icon name="person" class="text-2xl md:text-4xl text-black"></ion-icon>
                    </div>
                </div>
                <div><ion-icon name="people" class="text-3xl"></ion-icon></div>

    
                <div class="flex flex-row md:flex-col gap-4">
                    @foreach ($users as $item)
                    <div class="bg-white size-10 md:size-13 rounded-full flex justify-center items-center">
                        <div class="size-4 rounded-full bg-[#6aaf34] absolute border-2 border-[#361619] md:mb-8 md:ml-12 mb-7 ml-9"></div>
                        <ion-icon name="person" class="text-2xl md:text-4xl text-black"></ion-icon>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

     
        <div class="bg-[#361619] rounded-4xl text-white h-16 md:h-[920px] xl:h-[300px] flex flex-row md:flex-col items-center justify-between w-full md:w-24 hidden md:flex">
            <livewire:chats.chat-group />
        </div>
    </div>

    <!-- aside en mobile -->
    <div :class="open ? 'translate-x-0' : 'translate-x-full'"
        class="fixed md:hidden top-0 right-0 w-64 h-screen bg-[#361619] text-white p-6 transition-transform z-40 shadow-lg">
        <!-- close button -->
        <button @click="open = false" class="absolute top-4 left-4 text-white text-3xl cursor-pointer">
            <ion-icon name="close"></ion-icon>
        </button>

        <!-- content -->
        <div class="flex flex-col items-center mt-10 gap-4">
            <div class="bg-white size-10 rounded-full flex justify-center items-center">
                <ion-icon name="person" class="text-3xl text-black"></ion-icon>
            </div>
            <ion-icon name="people" class="text-3xl"></ion-icon>

            <!-- more content -->
            <div class="flex flex-wrap gap-4 mt-4">
                @foreach ($users as $item)
                <div class="bg-white size-10 rounded-full flex justify-center items-center">
                    <div class="size-4 rounded-full bg-[#6aaf34] absolute border-2 border-[#361619] mb-7 ml-9"></div>
                    <ion-icon name="person" class="text-2xl text-black"></ion-icon>
                </div>
                @endforeach
            </div>

            <!-- Chat group -->
            <div class="mt-10 w-full flex flex-wrap">
                <livewire:chats.chat-group />
            </div>
        </div>
    </div>
</div>




{{-- <div class="flex flex-col gap-2 xl:gap-10 xl:justify-center md:items-center w-full mt-2 ">
    <div
        class="bg-[#361619] rounded-4xl text-white md:mt-1 md:pb-20 xl:pb-0 h-16 md:h-full xl:h-[650px] flex flex-row md:flex-col items-center justify-between w-full md:w-24 ">
        <div class="flex flex-row md:flex-col items-center  justify-center gap-2 md:gap-6 ">
            <div class="pl-4 md:pl-0 md:mt-10 flex justify-center items-center ">
                <div class="bg-white size-10 md:size-14 rounded-full flex justify-center items-center">
                    <ion-icon name="person" class="text-2xl md:text-4xl text-black"></ion-icon>
                </div>
            </div>
            <div><ion-icon name="people" class="text-3xl"></ion-icon></div>
            <div class="flex flex-row md:flex-col gap-4 ">
                @foreach ($users as $item)
                <div class="bg-white size-10 md:size-13 rounded-full flex justify-center items-center">
                    <div
                        class="size-4 rounded-full bg-[#6aaf34] absolute border-2 border-[#361619] md:mb-8 md:ml-12 mb-7 ml-9">
                    </div>
                    <ion-icon name="person" class="text-2xl md:text-4xl text-black"></ion-icon>
                </div>
                @endforeach

            </div>

        </div>
    </div>
    <div>
        <div
            class="bg-[#361619] rounded-4xl text-white h-16 md:h-[920px] xl:h-[300px] flex flex-row md:flex-col items-center justify-between w-full md:w-24">
            <livewire:chats.chat-group />
        </div>
    </div>
</div> --}}
