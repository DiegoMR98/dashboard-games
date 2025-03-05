<div class="flex flex-col h-[545px] md:ml-2">
    <div class="flex justify-between items-end">
        <h1 class="text-2xl text-white">Your Statistic</h1>
        <h1 class="text-xl text-white"><ion-icon name="arrow-forward-outline" class="text-2xl cursor-pointer hover:scale-110 transition"></ion-icon></h1>
    </div>
    <div class="flex flex-col items-center h-[545px] justify-between bg-[#361619] rounded-4xl mt-3">
        <div class="flex items-center justify-center mt-20">
            <div class="size-50 border-2 border-red-600 rounded-full flex flex-col items-center justify-center">
                <h1 class="text-sm opacity-60 text-white">Total hours</h1>
                <h1 class="text-3xl font-semibold text-white">12,340h</h1>
            </div>
        </div>
        <div class="flex justify-around mb-6 w-full text-white px-10">
            {{-- Pasar estos datos por un array--}}
            <div class="flex flex-col gap-2 items-center">
                <div class="flex justify-center items-center bg-[#C4383D]  size-12 lg:size-[4vw] rounded-full"><ion-icon name="american-football" class="text-4xl md:text-2xl lg:text-4xl"></ion-icon></div>
                <div><h1 class=" text-2xl md:text-xs lg:text-lg">2,340h</h1></div>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="flex justify-center items-center bg-[#F6F7CF]  size-12 lg:size-[4vw] rounded-full"><ion-icon name="shield" class="text-4xl md:text-2xl lg:text-4xl text-black"></ion-icon></div>
                <div><h1 class=" text-2xl md:text-xs lg:text-lg">5,420h</h1></div>
            </div>
            <div class="flex flex-col gap-2 items-center">
                <div class="flex justify-center items-center bg-[#7963CC]  size-12 lg:size-[4vw] rounded-full"><ion-icon name="skull" class="text-4xl md:text-2xl lg:text-4xl"></ion-icon></div>
                <div><h1 class="text-2xl md:text-xs lg:text-lg">4,580h</h1></div>
            </div>
            
        </div>
    </div>
    
</div>
