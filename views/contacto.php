<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main class="container" style="margin-left:240px;">

        <br>

        <div class="row justify-content-center mt-3">
            <div class="col-12 text-center mb-4">
                <h1 class="fw-bold text-primary">Contacto</h1>
                <p class="text-muted">Envíanos un mensaje y te responderemos lo antes posible</p>
            </div>
        </div>

        <!-- Botón volver -->
        <div class="col-12 col-md-3 mb-3">
            <a href="/index.php" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i> Volver al Panel
            </a>
        </div>

        <!-- Formulario de contacto -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="/views/dashboard.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="correo" class="form-label fw-bold">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="bi bi-send-fill me-2"></i> Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <img src="https://vinv.ucr.ac.cr/sites/default/files/styles/logos/public/logotipos/area-item6-big.png?itok=xxRVmXIv" 
                     alt="logo clínica" 
                     class="img-fluid shadow-sm p-2 bg-white rounded" 
                     style="max-width:200px;">
            </div>
        </div>

    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/footer/footer.php"; ?>

</body>
</html>
