<div class="flex flex-row md:flex-col items-center md:mt-6 gap-4">
    <div class="md:mt-2 pl-4">
        <ion-icon name="logo-wechat" class="text-3xl"></ion-icon>
    </div>
    <div class="flex flex-row md:flex-col gap-4">
        {{-- Hacer foreach para renderirzar cada chat--}}
        @foreach ($groups as $item)
        <div class="bg-white size-10 md:size-13 rounded-full flex justify-center items-center">
            <div class="size-4 rounded-full bg-red-800 absolute border-2 border-[#361619] md:mb-8 md:ml-12 mb-7 ml-9"></div>
            <ion-icon name="people" class="text-2xl md:text-3xl text-black"></ion-icon>
        </div>
        @endforeach
        
    </div>
</div>
