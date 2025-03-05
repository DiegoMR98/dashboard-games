<div class="flex flex-col md:flex-row bg-gradient-to-b from-[#C44745] to-[#63282E] md:bg-gradient-to-r from-[#C44745] to-[#63282E] rounded-4xl h-[600px] md:h-[370px] md:mr-2">
    {{-- Pasar los datos por arrays, son tres cuadros o juegos que deben pasar como slider --}}
    <div class="md:w-3/5 pt-7 pb-7 px-7 ">
        <div class="flex gap-2">
            <div class="flex gap-1 bg-[#F6F7CF] px-3 py-1 rounded-3xl items-center justify-center">
                <div class="flex justify-center items-center">
                    <ion-icon name="flame-outline" class="text-xl"></ion-icon>
                </div>
                <div>
                    <h1 style="font-family: 'Poppins', sans-serif" class="text-sm font-bold">Popular</h1>
                </div>
            </div>
            <div class="bg-[#361619] size-10 rounded-full flex justify-center items-center">
                <div class="flex justify-center items-center bg-white rounded-full"><ion-icon name="logo-steam"
                        class="text-2xl"></ion-icon></div>

            </div>
            <div class="bg-[#361619] size-10 rounded-full flex justify-center items-center">
                <div class="flex justify-center items-center bg-white rounded-full"><ion-icon name="game-controller"
                        class="text-2xl"></ion-icon></div>

            </div>

        </div>
        <div class="flex flex-col justify-around h-full">
            <h1 class="text-4xl font-bold text-white" style="font-family: 'Poppins', sans-serif">Valorant</h1>
            <p class="text-white text-xs xl:text-sm" style="font-family: 'Poppins', sans-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus distinctio,
                voluptatibus mollitia molestias suscipit quam cupiditate quasi atque? Recusandae nob corrupti ipsa est
                officiis voluptatum erroraccusamus sapiente amet.</p>
            <div class="flex gap-2 mb-2">
                <div class="flex ">
                    <div class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1 ">
                        <ion-icon name="person" class="text-2xl"></ion-icon>
                    </div>
                    <div
                        class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1 ml-[-12px]">
                        <ion-icon name="person" class="text-2xl"></ion-icon>
                    </div>
                    <div
                        class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1 ml-[-12px]">
                        <ion-icon name="person" class="text-2xl"></ion-icon>
                    </div>
                </div>
                <div class="flex justify-center items-center bg-white rounded-4xl">
                    <div class="px-3 flex justify-center items-center">
                        <ion-icon name="thumbs-up" class="text-2xl"></ion-icon>
                    </div>
                    <div class="pr-3 flex justify-center items-center">
                        <h1 style="font-family: 'Poppins', sans-serif" class="font-medium text-xs xl:text-sm">+53 Reviews</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="md:w-2/5 flex items-end justify-center md:justify-normal overflow-hidden md:overflow-visible relative">
        <div class="bg-[#9b3a38] w-5 h-1 rounded-xs absolute right-0 md:top-0  bottom-0 cursor-pointer"></div>
        <div class="bg-[#e93734] w-10 h-1 rounded-xs absolute right-6 md:top-0 bottom-0 cursor-pointer"></div>
        <div class="bg-[#9b3a38] w-5 h-1 rounded-xs absolute right-17 md:top-0 bottom-0 cursor-pointer"></div>
        <img src="{{ asset('images/pruebaultimate.png') }}" alt="Juego " class="md:absolute size-80 xl:size-[25vw]">
    </div>

</div>
