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
        display:grid;
        grid-template-columns: 150px 1fr 150px;
        grid-template-rows: 100px 1fr 1fr 100px;
        height: 100vh;
        grid-template-areas: 
        "header main footer"
        "header main footer"
        "header main footer"
        "header main footer"
    }

    @media (width < 768px) {
        section {
            grid-template-areas:
            "header header header"
            "main main main"
            "main main main"
            "footer footer footer"
        }
    }
    section header {
        grid-area: header;
    }
    section main {
        grid-area: main;
        display:grid;
        grid-template-columns: 1fr 400px;
        grid-template-rows: 100px 1fr 1fr 1fr;
        grid-template-areas:
        "saludo saludo"
        "componente games"
        "newgames estadistica"
        "descarga estadistica"
        
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
        grid-area:games;
    }
    section main div:nth-child(4) {
        grid-area:newgames;
    }
    section main div:nth-child(5) {
        grid-area:estadistica;
    }
    section main div:nth-child(6){
        grid-area:descarga;
    }
</style>
<body>
    <section class="gap-2">
        <header class="bg-red-400 ">barra lateral</header>
        <main class="bg-blue-100 gap-2">
            <div class="bg-yellow-500">
                Saludo y barra de busqueda, carrito de compras y notificaciones
            </div>
            <div class="bg-emerald-500">
                Primer componente del juego
            </div>
            <div class="bg-fuchsia-600">
                Lista de juegos
            </div>
            <div class="bg-amber-400">
                Nuevos juegos
            </div>
            <div class="bg-orange-600">Estadisticas</div>
            <div class="bg-cyan-500">Ultimas descargas</div>
        </main>
        <footer class="bg-indigo-400">Segunda barra lateral</footer>
    </section>
</body>
</html>