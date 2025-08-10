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
                <h1 class="fw-bold text-primary">Panel de Administración Clínica</h1>
                <p class="text-muted">Gestiona la información de los pacientes de manera rápida y segura</p>
            </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
            <a href="/auth/logout.php" class="btn btn-outline-danger">
                <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
            </a>
        </div>
        
        <div class="row justify-content-center mb-4">
            <div class="col-12 col-md-3 mb-3">
                <a href="/views/patients/registro.php" class="btn btn-primary btn-lg w-100 shadow-sm">
                    <i class="bi bi-person-plus-fill me-2"></i> Registrar Paciente
                </a>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <a href="/views/patients/mostrarPacientes.php" class="btn btn-success btn-lg w-100 shadow-sm">
                    <i class="bi bi-list-ul me-2"></i> Mostrar Pacientes
                </a>
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
