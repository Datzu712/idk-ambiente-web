<!DOCTYPE html>
<html lang="es">
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main class="container" style="margin-left:240px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h2 class="text-center mt-4">Listado de Pacientes</h2>

                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalRegistroPaciente">
                    <i class="bi bi-person-plus-fill"></i> Registrar Paciente
                </button>

                <?php 
                  include_once __DIR__ . "/form_registro_paciente.php";
                  include_once __DIR__ . "/form_actualizar_paciente.php";
                ?>

                <div class="table-responsive">
                    <table id="tablaPacientes" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Diagnóstico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/footer/footer.php"; ?>

</body>
</html>
