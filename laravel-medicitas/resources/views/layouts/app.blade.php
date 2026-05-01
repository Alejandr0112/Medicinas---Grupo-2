<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Medicinas')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="app-container">
    <aside class="sidebar">
        <h2 class="sidebar-title">Medicinas</h2>

        <nav class="sidebar-menu">
            <a href="#" class="menu-link">
                <i class="fa-solid fa-house"></i>
                Inicio
            </a>

            <a href="#" class="menu-link">
                <i class="fa-solid fa-pills"></i>
                Medicinas
            </a>

            <a href="#" class="menu-link">
                <i class="fa-solid fa-users"></i>
                Usuarios
            </a>

            <a href="#" class="menu-link">
                <i class="fa-solid fa-gear"></i>
                Configuración
            </a>
        </nav>
    </aside>

    <main class="main-content">
        <header class="header">
            <h1>@yield('page-title', 'Panel principal')</h1>
        </header>

        <section class="content">
            @yield('content')
        </section>

        <footer class="footer">
            <p>Sistema de Medicinas - Grupo 2</p>
        </footer>
    </main>
</div>
</body>
</html>
