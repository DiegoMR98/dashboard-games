<div class="flex flex-col gap-4 h-[360px] justify-between ml-2 text-white">
    {{-- Poner un foreach para pasarle las fotos y los datos y así que recorra y que pinte los tres juegos --}}
    @foreach ($theGames as $item)
        <div class="flex justify-between gap-4 bg-[#361619] rounded-4xl h-[100px] items-center text-sm hover:scale-107 transition cursor-pointer">
            <div class="w-1/5 ml-2 aspect-square">
                <img src="{{ $item['photo'] }}" alt="Logo del juego {{ $item['name'] }}" class="rounded-2xl">
            </div>
            <div class="w-3/5 text-white">
                <h1>{{ $item['name'] }}</h1> <h1 class="opacity-50">{{ $item['description'] }}</h1></div>
            <div class="w-1/5 text-white flex justify-end"><ion-icon name="chevron-forward" class="text-2xl mr-4"></ion-icon></div>
        </div>
    @endforeach
</div>
