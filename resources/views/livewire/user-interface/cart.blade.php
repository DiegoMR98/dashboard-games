<div x-data="{ cartModalOpen: false }">
    <div @click="cartModalOpen = true"
        class="bg-[#361619] rounded-full size-10 p-2 flex justify-center items-center relative">
        <template x-if="$store.cart.items.length != 0">
            <div class="size-4 bg-[#B9454F] rounded-full absolute top-0 right-0">
                <h1 x-text="$store.cart.items.length" class="text-xs text-white font-bold ml-1"></h1>
            </div>
        </template>

        <ion-icon name="cart" class="size-8 text-white cursor-pointer hover:scale-110 transition"></ion-icon>
    </div>

    {{-- Modal --}}
    <div @click.away="cartModalOpen = false" x-show="cartModalOpen"
        class="fixed inset-0 flex items-center justify-center  z-50">

        <div class="bg-white p-6 rounded-lg w-96 relative">
            <button @click="cartModalOpen = false" class="absolute top-2 right-2 text-xl font-bold text-gray-600 cursor-pointer">
                <ion-icon name="close" class="text-2xl"></ion-icon>
            </button>

            <h2 class="text-lg font-bold mb-4">Cart</h2>

            <template x-if="$store.cart.items.length > 0">
                <div>
                    <template x-for="item in $store.cart.items" :key="item.id">
                        <div class="flex items-center gap-4 border-b py-2">
                            <img :src="item.photo" class="w-16 h-16 rounded">
                            <div>
                                <p class="font-semibold" x-text="item.title"></p>
                                <p>$<span x-text="item.price"></span></p>
                                <p>Quantity: <span x-text="item.quantity"></span></p>
                                <button class="bg-red-500 text-white px-2 py-1 rounded text-sm cursor-pointer"
                                    @click="$store.cart.removeItem(item.id)">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </template>

                    <div class="text-right mt-4">
                        <p class="font-semibold">Total: $<span
                                x-text="$store.cart.items.reduce((total, item) => total + (item.price * item.quantity), 0)"></span>
                        </p>
                    </div>
                </div>
            </template>

            <template x-if="$store.cart.items.length === 0">
                <p class="text-gray-500 text-center">No hay productos en el carrito.</p>
            </template>

            <div class="flex justify-between mt-4">
                <button @click="$store.cart.clearCart(); cartModalOpen = false"
                    class="bg-gray-400 text-white px-4 py-2 rounded cursor-pointer">
                    Delete all
                </button>
                <button class="bg-green-500 text-white px-4 py-2 rounded cursor-pointer">
                    Checkout
                </button>
            </div>
        </div>
    </div>
</div>
</div>
