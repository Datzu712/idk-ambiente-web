<!DOCTYPE html>
<html lang="en">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <header>
        <div class="presentation">
            <h1>Actualización de los pacientes</h1>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/navbar/navbar.php"; ?>
    </header>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_actualizar_paciente.php"; ?>
    </main>
    <script src="/public/js/actualizarPaciente.js"></script>
</body>