<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="dashboard-body">

<nav>
    <h1>Dashboard Medicitas</h1>
</nav>

<div class="cards">

    <div class="card">
        <h3>Agenda de citas</h3>
        <button onclick="window.location.href='/citas'">Abrir</button>
    </div>

    <div class="card">
        <h3>Reporte</h3>
        <button onclick="mostrarError()">Ver</button>
    </div>

    <div class="card">
        <h3>Confirmación</h3>
        <button onclick="confirmarAccion()">Confirmar</button>
    </div>

</div>

<script>
    function mostrarError(){
        Swal.fire({
            title:'Error',
            text:'Módulo no disponible',
            icon:'error'
        });
    }

    function confirmarAccion(){
        Swal.fire({
            title:'¿Desea continuar?',
            icon:'question',
            showCancelButton:true,
            confirmButtonText:'Sí'
        });
    }
</script>

</body>
</html>
