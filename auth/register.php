<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <h2 class="mb-4 text-center text-primary">Registrarse</h2>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form method="POST" action="/index.php?page=register">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">Crear cuenta</button>
            </form>
            <p class="mt-3 text-center">¿Ya tienes cuenta? <a href="/index.php?page=login">Iniciar sesión</a></p>
        </div>
    </div>
</body>
</html>
