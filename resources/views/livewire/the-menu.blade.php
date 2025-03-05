<div x-data="{ open: false }">
    <!-- menu button-->
    <button @click="open = !open" class="md:hidden fixed top-4 left-4 z-50 bg-[#361619] px-2 py-1 rounded-lg cursor-pointer">
        <ion-icon name="menu" class="text-white text-3xl"></ion-icon>
    </button>

    <!-- menu big aside-->
    <div class="bg-[#361619] rounded-4xl m-2 md:m-4 text-white h-[1585px] xl:h-[960px] md:flex flex-row md:flex-col items-center justify-around md:justify-between w-24 hidden">
        <div class="flex flex-row md:flex-col justify-center items-center mt-10 gap-6">
            <img src="{{ asset('images/logo1.webp') }}" alt="Logo" class="size-10 md:size-15">
            <ul class="flex flex-row md:flex-col gap-10 items-center">
                @foreach ($itemsMenu as $item)
                    @php
                        $activeClass = $item === 'home' ? 'text-[#C44745]' : '';
                        $activeClass2 = $item === 'home' ? 'bg-[#ca807f]' : '';
                    @endphp
                    <li class="flex flex-col justify-center items-center">
                        <div class="absolute size-6 blur-xs {{ $activeClass2 }} rounded-full"></div>
                        <ion-icon name="{{ $item }}" class="cursor-pointer text-2xl md:text-3xl {{ $activeClass }} hover:scale-125 transition"></ion-icon>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="text-4xl text-[#C44745] md:mb-10 border-2 border-dashed size-10 md:size-14 flex justify-center items-center rounded-xl">
            <div class="bg-white size-3 md:size-7 absolute rounded-full md:blur-[6px] blur-xs"></div>
            <ion-icon name="add-circle" class="cursor-pointer hover:scale-125 transition text-xl md:text-3xl"></ion-icon>
        </div>
    </div>

    <!-- Menu mobile -->
    <div :class="open ? 'translate-x-0' : '-translate-x-full'"
        class="fixed md:hidden top-0 left-0 w-64 h-screen bg-[#361619] text-white p-6 transition-transform z-40 shadow-lg">
        <!-- close button -->
        <button @click="open = false" class="absolute top-4 right-4 text-white text-3xl cursor-pointer">
            <ion-icon name="close"></ion-icon>
        </button>

        <!-- menu content -->
        <div class="flex flex-col items-center mt-10 gap-10">
            <img src="{{ asset('images/logo1.webp') }}" alt="Logo" class="size-10">
            <ul class="flex flex-col gap-6 items-center">
                @foreach ($itemsMenu as $item)
                @php
                        $activeClass = $item === 'home' ? 'text-[#C44745]' : '';
                        $activeClass2 = $item === 'home' ? 'bg-[#ca807f]' : '';
                    @endphp
                    <li class="flex flex-col justify-center items-center">
                        <div class="absolute size-6 blur-xs {{ $activeClass2 }} rounded-full"></div>
                        <ion-icon name="{{ $item }}" class="cursor-pointer text-3xl {{ $activeClass }} hover:scale-125 transition"></ion-icon>
                    </li>
                @endforeach
            </ul>
            <div class="text-4xl text-[#C44745] md:mb-10 border-2 border-dashed size-14 flex justify-center items-center rounded-xl">
                <div class="bg-white size-7 absolute rounded-full md:blur-[6px] blur-xs"></div>
                <ion-icon name="add-circle" class="cursor-pointer hover:scale-125 transition text-3xl"></ion-icon>
            </div>
        </div>
    </div>
</div>

{{-- <div class="bg-[#361619] rounded-4xl m-2 md:m-4 text-white h-16 md:h-[1585px] xl:h-[960px] md:flex flex-row  md:flex-col items-center justify-around md:justify-between w-full md:w-52  hidden">
    <div class="flex flex-row md:flex-col justify-center items-center md:mt-10 gap-4 md:gap-0">
        <img src="{{ asset('images/logo1.webp') }}" alt="Logo" class="size-10 md:size-15">
        <div class="flex flex-row md:flex-col justify-center items-center md:mt-10 ">
            {{-- Esto se hará un foreach para tomarlo de un array, y que se pueda quitar o añadir --
            <ul class="flex flex-row md:flex-col gap-10 items-center">
                @foreach ($itemsMenu as $item)
                    @php
                        $activeClass = $item === 'home' ? 'text-[#C44745]' : '';
                        $activeClass2 = $item === 'home' ? 'bg-[#ca807f]' : '';
                    @endphp

                    <li class="flex flex-col justify-center items-center">
                        <div class="absolute size-6 blur-xs {{ $activeClass2 }} rounded-full"></div><ion-icon
                            name="{{ $item }}"
                            class="cursor-pointer text-2xl md:text-3xl {{ $activeClass }} hover:scale-125 transition"> </ion-icon>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div
        class="text-4xl text-[#C44745] md:mb-10 border-2 border-dashed size-10 md:size-14 flex justify-center items-center rounded-xl">
        <div class="bg-white size-3 md:size-7 absolute rounded-full md:blur-[6px] blur-xs"></div>
        <ion-icon name="add-circle" class="cursor-pointer hover:scale-125 transition text-xl md:text-3xl"></ion-icon>
    </div>

</div>  --}}
