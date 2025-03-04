
<div class="flex flex-col gap-4 h-full justify-around xl:justify-between  xl:ml-2 text-white">

    {{-- Poner un foreach para pasarle las fotos y los datos y así que recorra y que pinte los tres juegos --}}
    @foreach ($theGames as $item)
        <div class="flex justify-between xl:gap-4 gap-2 bg-[#361619] rounded-4xl h-[100px] items-center text-sm hover:scale-102 xl:hover:scale-107 transition cursor-pointer">
            <div class="w-2/10 xl:w-1/5 ml-2">
                <img src="{{ $item['photo'] }}" alt="Logo del juego {{ $item['name'] }}" class="rounded-2xl size-18 ">
            </div>
            <div class="w-7/10 xl:w-3/5 text-white">
                <h1>{{ $item['name'] }}</h1> <h1 class="opacity-50">{{ $item['description'] }}</h1></div>
            <div class="w-1/10 xl:w-1/5 text-white flex justify-end"><ion-icon name="chevron-forward" class="text-2xl mr-4"></ion-icon></div>
        </div>
    @endforeach
</div>
