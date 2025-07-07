
<!DOCTYPE html>
<html lang="en">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <header>
        <div class="presentation">
            <h1>Listado de pacientes</h1>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/navbar/navbar.php"; ?>
    </header>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_buscar_paciente.php"; ?>
        <div id="resultadoBusqueda"></div>
    </main>
    <script src="/public/js/buscarPaciente.js"></script>
</body>