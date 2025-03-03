<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Game</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<style>
    section {
        display: grid;
        grid-template-columns: 150px 1fr 150px;
        grid-template-rows: 1000px;
        height: 1000px;
        grid-template-areas:
            "header main footer"

    }
    section main {
        grid-area: main;
        display: grid;
        grid-template-columns: 10fr 4fr;
        grid-template-rows: 60px 370px 370px 180px;
        grid-template-areas:
            "saludo saludo"
            "componente games"
            "newgames estadistica"
            "descarga estadistica"

    }

    @media (width < 768px) {
        section {
            grid-template-columns: 1fr 2fr 1fr;
            grid-template-rows: 100px 1fr 1fr 100px;
            grid-template-areas:
                "header main footer"
                "header main footer"
                "header main footer"
                "header main footer"
        }

        section main {
            grid-template-columns: 1fr;
            grid-template-rows: 60px 1fr 1fr 1fr 1fr 120px;
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

<body class="bg-gradient-to-r from-[#5E2933] via-[#63282E] to-[#61282E]">
    <section class="gap-2">
        <header class="flex items-center justify-center"> <livewire:the-menu /> </header>
        <main class="gap-4">
            <div class="flex justify-between items-center mt-2">
                <div class="w-2/5"><livewire:user-interface.saludo /></div>
                <div class="flex justify-between gap-24 w-3/5 items-center"><livewire:user-interface.search />
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
        <footer class="flex items-center justify-center">
            <livewire:chats.chats />

        </footer>
    </section>
</body>

</html>
