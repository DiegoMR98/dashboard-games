<div class="bg-[#361619] rounded-4xl m-4 text-white h-[1585px] xl:h-[960px] flex flex-col items-center justify-between w-52 ">
    <div class="flex flex-col justify-center items-center mt-10">
        <img src="{{ asset('images/logo1.webp') }}" alt="Logo" class="size-15">
        <div class="flex flex-col justify-center items-center mt-10">
            {{-- Esto se hará un foreach para tomarlo de un array, y que se pueda quitar o añadir --}}
            <ul class="flex flex-col gap-10 items-center">
                @foreach ($itemsMenu as $item)
                    @php
                        $activeClass = $item === 'home' ? 'text-[#C44745]' : '';
                        $activeClass2 = $item === 'home' ? 'bg-[#ca807f]' : '';
                    @endphp

                    <li class="flex flex-col justify-center items-center">
                        <div class="absolute size-6 blur-xs {{ $activeClass2 }} rounded-full"></div><ion-icon
                            name="{{ $item }}"
                            class="cursor-pointer text-3xl {{ $activeClass }} hover:scale-125 transition"> </ion-icon>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div
        class="text-4xl text-[#C44745] mb-10 border-2 border-dashed size-14 flex justify-center items-center rounded-xl">
        <div class="bg-white size-7 absolute rounded-full blur-[6px]"></div>
        <ion-icon name="add-circle" class="cursor-pointer hover:scale-125 transition"></ion-icon>
    </div>



</div>
