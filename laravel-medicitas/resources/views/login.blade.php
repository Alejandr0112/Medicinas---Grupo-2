<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Medicitas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="login-body">

<div class="login-container">
    <h1>MEDICITAS</h1>

    <input type="text" placeholder="Usuario">
    <input type="password" placeholder="Contraseña">

    <button onclick="loginExitoso()">Iniciar sesión</button>

    <a href="/dashboard">Entrar sin login</a>
</div>

<script>
    function loginExitoso(){
        Swal.fire({
            title: 'Éxito',
            text: 'Inicio de sesión correcto',
            icon: 'success'
        });
    }
</script>

</body>
</html>
