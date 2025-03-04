<div class="mr-2 pb-4 xl:pb-0">
    <div class="flex justify-between items-end mt-[-12px]">
        <h1 class="text-2xl text-white font-semibold">Last Downloads</h1>
        <h1 class="text-lg text-white opacity-60 cursor-pointer hover:scale-105 transition">See More</h1>
    </div>

    {{-- Si alcanza poner aca tambien varios para que si se cierran que vuela a apercer --}}
    <div class="flex gap-2 justify-between text-white bg-[#BA3C3D] rounded-4xl h-[120px] mt-4 px-4 py-6">
        {{-- POner foreach para más tarjetas --}}
        <div class="flex justify-center gap-6 items-center ">
            <div><img src="{{ asset('images/fifa25.jpg') }}" alt="Logo de Figa25" class="w-20 rounded-xl"></div>
            <div class="flex flex-col gap-3">
                <h1 class="font-semibold text-xl">FIFA 24</h1>
                <div class="bg-[#361619] px-3 py-1 rounded-xl">
                    <h1>Sports Simulator</h1>
                </div>

            </div>
        </div>
        <div class="flex gap-10 items-center">
            <div class="flex flex-col items-end">
                <h1 class="text-lg">1 hour 23 min.</h1>
                <h1 class="text-md opacity-50">256Mb of 1.23Gb</h1>
            </div>
            <div class="flex gap-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white size-10 absolute rounded-full blur-[6px]"></div>
                    <div
                        class="size-10 bg-[#C34745] flex justify-center items-center rounded-full cursor-pointer hover:scale-105 transition z-50">

                        <ion-icon name="play" class="text-white text-3xl"></ion-icon>
                    </div>
                </div>

                <div>
                    <div>
                        <div class="bg-white size-10 absolute rounded-full blur-[6px]"></div>
                        <div
                            class="size-10 bg-white flex justify-center items-center rounded-full cursor-pointer hover:scale-105 transition z-50">

                            <ion-icon name="close" class="text-[#C34745] text-3xl"></ion-icon>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
