<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Citas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="citas-body">

<div class="citas-container">
    <h1>Agendar cita</h1>

    <input type="text" placeholder="Nombre paciente">

    <select>
        <option>Cardiología</option>
        <option>Pediatría</option>
        <option>Dermatología</option>
    </select>

    <input type="date">

    <button>Guardar cita</button>

    <a href="/dashboard">Volver al dashboard</a>
</div>

</body>
</html>
