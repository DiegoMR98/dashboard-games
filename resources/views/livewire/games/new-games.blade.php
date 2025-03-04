<div x-data="{
    currentIndex: 0,
    total: {{ count($newGames) }},
    next() { this.currentIndex = Math.min(this.currentIndex + 1, this.total - 1); },
    prev() { this.currentIndex = Math.max(this.currentIndex - 1, 0); }
}" class="relative overflow-hidden mr-2 h-[370px] min-w-0">

    <div class="flex justify-between items-end mb-3">
        <h1 class="text-2xl text-white font-semibold">New Games</h1>
        <h1 class="text-lg text-white opacity-60 cursor-pointer hover:scale-105 transition">See More</h1>
    </div>
    
    <div class="flex transition-transform duration-500 ease-in-out gap-6 px-1 z-30"
        :style="'transform: translateX(-' + (currentIndex * 33) + '%)'">
        
        @foreach ($newGames as $game)
            
            <div class="flex-shrink-0 rounded-[30px] p-4 text-white aspect-square hover:scale-101 transition relative z-30
                max-w-[300px] sm:w-[80%] md:w-[50%] lg:w-[40%]"
                style="background-image: url('{{ asset($game['photo']) }}');background-size: cover; background-position: center;">
                
                <div class="h-full w-full bg-black opacity-40 rounded-[30px] absolute top-0 left-0 z-30"></div>
                <div class="flex flex-col justify-between h-full">
                    <div class="flex justify-between">
                        <div class="size-10 bg-[#C34745] flex justify-center items-center rounded-full cursor-pointer hover:scale-105 transition z-50">
                            <ion-icon name="play" class="text-white text-3xl"></ion-icon>
                        </div>
                        <div class="size-10 bg-white flex justify-center items-center rounded-full cursor-pointer hover:scale-105 transition z-50">
                            <ion-icon name="bag" class="text-[#C34745] text-3xl"></ion-icon>
                        </div>
                    </div>
                    <div class="mb-5 z-50">
                        <h3 class="text-2xl font-bold">{{ $game['title'] }}</h3>
                        <p class="text-sm pr-10">{{ $game['description'] }}</p>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>

    <!-- Botón izquierdo -->
    <button @click="prev()" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white text-black p-2 rounded-full shadow-md size-10 flex justify-center items-center cursor-pointer opacity-50">
        <ion-icon name="chevron-back" class="text-black text-2xl"></ion-icon>
    </button>

    <!-- Botón derecho -->
    <button @click="next()" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white text-black p-2 rounded-full shadow-md size-10 flex justify-center items-center cursor-pointer opacity-50">
        <ion-icon name="chevron-forward" class="text-black text-2xl"></ion-icon>
    </button>
</div>








{{-- <div class="mr-2">
   <div class="flex justify-between items-end">
      <h1 class="text-2xl text-white">New Games</h1>
      <h1 class="text-lg text-white opacity-60 cursor-pointer hover:scale-105 transition">See More</h1>
   </div>
   
   <div class="flex items-center gap-6 mt-3">
      {{-- Aca igual se va a poner a recorrer un array para renderizar cada juego en el slider 

      <div class="bg-green-500 rounded-4xl px-8 py-6 flex flex-col justify-between h-[300px] ">
         <div class="flex justify-between">
            <div>play</div>
            <div>comprar</div>
         </div>
         <div>
            <h1 class="text-white text-4xl">Uncharted 4</h1>
            <p class="text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus adipisci molestiae reprehenderit deleniti eveniet, laborum harum cupiditate quo quibusdam fugiat officia doloribus officiis ea, ad, doloremque perspiciatis odio sunt explicabo.</p>
         </div>
      </div>
      <div class="bg-green-500 rounded-4xl px-8 py-6 flex flex-col justify-between h-[300px] mt-2">
         <div class="flex justify-between">
            <div>play</div>
            <div>comprar</div>
         </div>
         <div>
            <h1 class="text-white text-4xl">Dishonored:Standard Edition</h1>
            <p class="text-white text-sm"></p>
         </div>
      </div>
   
      
   </div>
</div> --}}
