<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>
    <main class="container" style="margin-left:240px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="text-center mt-4 mb-4">Creación de pacientes</h1>
                <?php if (isset($_GET['status']) && $_GET['status'] === 'error') {
                    echo '<div class="alert alert-danger" role="alert">Hubo un error</div>';
                } ?>
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Registrar Paciente</h2>
                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_registro_paciente.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/js/registroPaciente.js"></script>
</body>

</html>