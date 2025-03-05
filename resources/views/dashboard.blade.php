<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Game</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<script>
    document.addEventListener('alpine:init', () => {
    Alpine.store('cart', {
        items: JSON.parse(localStorage.getItem('cart')) || [],

        addItem(item) {
            let found = this.items.find(i => i.id === item.id);
            if (found) {
                found.quantity++;
            } else {
                this.items.push({ ...item, quantity: 1 });
            }
            this.saveCart();
        },

        removeItem(id) {
            this.items = this.items.filter(i => i.id !== id);
            this.saveCart();
        },

        clearCart() {
            this.items = [];
            this.saveCart();
        },

        get totalItems() {
            return this.items.reduce((acc, item) => acc + item.quantity, 0);
        },

        saveCart() {
            localStorage.setItem('cart', JSON.stringify(this.items));
        }
    });
});
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    section {
        display: grid;
        grid-template-columns: 130px 1fr 130px;
        grid-template-rows: 1000px;
        height: 1000px;
        grid-template-areas:
            "header main footer"

    }

    section main {
        grid-area: main;
        display: grid;
        grid-template-columns: 10fr 4fr;
        grid-template-rows: 60px 390px 370px 180px;
        grid-template-areas:
            "saludo saludo"
            "componente games"
            "newgames estadistica"
            "descarga estadistica"

    }

    @media (width < 1226px) {
        section {
            grid-template-columns: 130px 1fr 130px;
            grid-template-rows: 100px 1fr 1fr 100px;
            grid-template-areas:
                "header main footer"
                "header main footer"
                "header main footer"
                "header main footer"
        }

        section main {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 60px 1fr 1fr 1fr 120px;
            grid-template-areas:
                "saludo saludo"
                "componente componente"
                "games estadistica"
                "newgames newgames"
                "descarga descarga"

        }
    }

    @media(width < 768px) {
        section {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 45px 1fr;
            grid-template-areas:
                "header footer"
                "main main"
        }

        section main {
            grid-template-columns: 1fr;
            grid-template-rows: 60px 600px 295px 310px 545px 308px;
            grid-template-areas:
                "saludo"
                "componente"
                "games"
                "newgames"
                "estadistica"
                "descarga"

        }
    }


    section header {
        grid-area: header;
    }



    section div {
        grid-area: div;
    }

    section footer {
        grid-area: footer;
    }

    section main div:first-child {
        grid-area: saludo;
    }

    section main div:nth-child(2) {
        grid-area: componente;
    }

    section main div:nth-child(3) {
        grid-area: games;
    }

    section main div:nth-child(4) {
        grid-area: newgames;
    }

    section main div:nth-child(5) {
        grid-area: estadistica;
    }

    section main div:nth-child(6) {
        grid-area: descarga;
    }
</style>

<body class="bg-gradient-to-r from-[#5E2933] via-[#63282E] to-[#61282E]" style="font-family: 'Poppins', sans-serif ">
    <section class="gap-2 ">
        <header class="flex xl:justify-center xl:items-center"> <livewire:the-menu /> </header>
        <main class="gap-y-6 gap-x-1 xl:gap-4 px-4 md:px-0">
            <div class="flex justify-between items-center  md:items-end mt-2 flex-wrap">
                <div class="w-2/5 md:w-1/2 lg:w-6/10">
                    <livewire:user-interface.saludo />
                </div>
                <div class="flex justify-between gap-2 xl:gap-14 w-3/5 md:w-1/2 lg:w-4/10 items-center ">
                    <livewire:user-interface.search />
                    <div class="flex gap-4 items-center">
                        <livewire:user-interface.cart />
                        <livewire:user-interface.notification />
                    </div>

                </div>
            </div>
            <div class="">
                <livewire:games.games-slider />
            </div>
            <div class="">
                <livewire:games.games-list />
            </div>
            <div class="">
                <livewire:games.new-games />
            </div>
            <div class="">
                <livewire:statistic />
            </div>
            <div class="">
                <livewire:games.downloaded />
            </div>
        </main>
        <footer class="flex xl:items-center justify-center">
            <livewire:chats.chats />

        </footer>
    </section>
</body>

</html>
