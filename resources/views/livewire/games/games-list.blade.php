
<div class="flex flex-col gap-4 md:h-full md:justify-around xl:justify-between  xl:ml-2 text-white">

    {{-- Poner un foreach para pasarle las fotos y los datos y así que recorra y que pinte los tres juegos --}}
    @foreach ($theGames as $item)
        <div class="flex justify-between xl:gap-4 gap-2 bg-[#361619] rounded-4xl  md:h-min[220px] lg:h-[100px] items-center text-sm hover:scale-102 xl:hover:scale-107 transition cursor-pointer py-2 lg:py-0">
            <div class="flex flex-row md:flex-col lg:flex-row justify-center items-center w-3/5 lg:4/5 gap-1">
                <div class="w-2/5 md:w-1/2 lg:w-2/5 ml-2">
                    <img src="{{ $item['photo'] }}" alt="Logo del juego {{ $item['name'] }}" class="rounded-2xl size-18 md:size-12 lg:size-18 ">
                </div>
                <div class="w-3/5 md:w-1/2 lg:w-3/5 text-white flex flex-col justify-center items-center">
                    <h1>{{ $item['name'] }}</h1> <h1 class="opacity-50">{{ $item['description'] }}</h1></div>
            </div>
            
            <div class="w-2/5 lg:w-1/5 text-white flex justify-end"><ion-icon name="chevron-forward" class="  text-xl lg:text-2xl mr-4"></ion-icon></div>
        </div>
    @endforeach
</div>


{{-- <div class="flex flex-col gap-4 h-full justify-around xl:justify-between  xl:ml-2 text-white">

    {{-- Poner un foreach para pasarle las fotos y los datos y así que recorra y que pinte los tres juegos 
    @foreach ($theGames as $item)
        <div class="flex justify-between xl:gap-4 gap-2 bg-[#361619] rounded-4xl h-min[220px] lg:h-[100px] items-center text-sm hover:scale-102 xl:hover:scale-107 transition cursor-pointer py-2 lg:py-0">
            <div class="flex flex-col lg:flex-row justify-center items-center w-3/5 gap-1">
                <div class="w-5/10 lg:w-2/5 ml-2">
                    <img src="{{ $item['photo'] }}" alt="Logo del juego {{ $item['name'] }}" class="rounded-2xl size-12 lg:size-18 ">
                </div>
                <div class="w-5/10 lg:w-3/5 text-white flex flex-col justify-center items-center">
                    <h1>{{ $item['name'] }}</h1> <h1 class="opacity-50">{{ $item['description'] }}</h1></div>
            </div>
            
            <div class="w-2/5 lg:w-1/5 text-white flex justify-end"><ion-icon name="chevron-forward" class="  text-xl lg:text-2xl mr-4"></ion-icon></div>
        </div>
    @endforeach
</div> --}}
