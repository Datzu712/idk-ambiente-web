<!DOCTYPE html>
<html lang="en">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <header>
        <div class="presentation">
            <h1>Creación de pacientes</h1>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/navbar/navbar.php"; ?>
        <div class="status-message">
        <div class="status-message">
            <?php
            if (isset($_GET['status']) && $_GET['status'] === 'error') {
                echo '<div class="alert alert-danger" role="alert">Hubo un error</div>';
            }
            ?>
    </header>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>
    <main>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_registro_paciente.php"; ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/js/registroPaciente.js"></script>
</body>

</html>