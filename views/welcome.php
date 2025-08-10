<!DOCTYPE html>
<html lang="es">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Web Sanitaria</title>
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
            <h1 class="mb-4 text-primary">Bienvenido a la Aplicación Web Sanitaria</h1>
            <p class="mb-4">
                
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="auth/login.php" class="btn btn-primary btn-lg">Iniciar Sesión</a>
                <a href="auth/register.php" class="btn btn-outline-primary btn-lg">Registrarse</a>
            </div>
        </div>
    </div>
</body>
</html>
