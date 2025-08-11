<!DOCTYPE html>
<html lang="es">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main class="container" style="margin-left:240px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h2 class="text-center mt-4">Listado de recetas</h2>

                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalRegistroReceta">
                    <i class="bi bi-person-plus-fill"></i> Registrar receta
                </button>

                <?php 
                  include_once __DIR__ . "/form_registro_Recetas.php";
                  include_once __DIR__ . "/form_actualizar_Recetas.php";
                ?>
                <table id="tablaRecetas" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Paciente</th>
                            <th>Médico</th>
                            <th>Medicamento</th>
                            <th>Dosis</th>
                            <th>Frecuencia</th>
                            <th>Fecha</th>
                            <th>Observaciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                </div>
            </div>
        </div>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/footer/footer.php"; ?>
</body>
</html>
