<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main class="container" style="margin-left:240px;">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">

                <div class="card shadow mt-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Listado de Citas</h2>

                        <button class="btn btn-primary btn-sm me-1 btn-registrar" data-bs-toggle="modal" data-bs-target="#modalRegistroCita">
                            <i class="bi bi-plus-circle me-2"></i> Registrar Cita
                        </button>

                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/citas/views/form_registro_cita.php"; ?>
                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/citas/views/form_actualizar_cita.php"; ?>

                        <div class="table-responsive mt-4">
                            <table id="tablaCitas" class="table table-striped table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre Paciente</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Estado</th>
                                        <th>Nombre Usuario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script src="/public/js/citas/CitasTable.js"></script>
    <script src="/public/js/citas/citas.js"></script>

</body>
</html>
