<div x-data="{ activeIndex: 0, games: {{ json_encode($theGames) }} }" class="relative">
    <div class="flex flex-col md:flex-row bg-gradient-to-b from-[#C44745] to-[#63282E] md:bg-gradient-to-r from-[#C44745] to-[#63282E] rounded-4xl h-[600px] md:h-[370px] xl:mr-2">
        

        <template x-for="(game, index) in games" :key="index">
            <div x-show="activeIndex === index" class="md:w-3/5 pt-7 pb-7 px-7 transition-all duration-300">
                <div class="flex gap-2">
                    <div class="flex gap-1 bg-[#F6F7CF] px-3 py-1 rounded-3xl items-center justify-center">
                        <ion-icon name="flame-outline" class="text-xl"></ion-icon>
                        <h1 class="text-sm font-bold" style="font-family: 'Poppins', sans-serif">Popular</h1>
                    </div>
                    <div class="bg-[#361619] size-10 rounded-full flex justify-center items-center">
                        <div class="bg-white rounded-full size-6 "><ion-icon name="logo-steam" class="text-2xl"></ion-icon></div>
                    </div>
                    <div class="bg-[#361619] size-10 rounded-full flex justify-center items-center">
                        <div class="bg-white rounded-full size-6"><ion-icon name="game-controller" class="text-2xl"></ion-icon></div>
                    </div>
                </div>
                <div class="flex flex-col justify-around h-full">
                    <h1 class="text-4xl font-bold text-white" style="font-family: 'Poppins', sans-serif" x-text="game.title"></h1>
                    <p class="text-white text-xs xl:text-sm" style="font-family: 'Poppins', sans-serif" x-text="game.description"></p>
                    <div class="flex gap-2 mb-2">
                        <div class="flex">
                            <div class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1">
                                <ion-icon name="person" class="text-2xl"></ion-icon>
                            </div>
                            <div class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1 ml-[-12px]">
                                <ion-icon name="person" class="text-2xl"></ion-icon>
                            </div>
                            <div class="bg-white size-10 rounded-full flex justify-center items-center border-black border-1 ml-[-12px]">
                                <ion-icon name="person" class="text-2xl"></ion-icon>
                            </div>
                        </div>
                        <div class="flex justify-center items-center bg-white rounded-4xl">
                            <div class="px-3 flex justify-center items-center">
                                <ion-icon name="thumbs-up" class="text-2xl"></ion-icon>
                            </div>
                            <div class="pr-3 flex justify-center items-center">
                                <h1 class="font-medium text-xs xl:text-sm" style="font-family: 'Poppins', sans-serif">
                                    +<span x-text="game.reviews"></span> Reviews
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>


        <template x-for="(game, index) in games" :key="index">
            <div x-show="activeIndex === index" class="md:w-2/5 flex items-end justify-center md:justify-normal overflow-hidden md:overflow-visible relative">
                <img :src="game.photo" alt="Juego" class="md:absolute size-80 xl:size-[25vw] 2xl:size-[430px] transition-all duration-300">
            </div>
        </template>
    </div>


    <div class="flex justify-center md:mt-4 space-x-2 z-[100]">
        <template x-for="(game, index) in games" :key="index">
            <div 
                @click="activeIndex = index" 
                class="w-8 h-1 rounded-xs cursor-pointer transition-all duration-300"
                :class="activeIndex === index ? 'bg-[#e93734]' : 'bg-[#9b3a38]'">
            </div>
        </template>
    </div>
</div>
