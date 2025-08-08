<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php'; ?>
<!DOCTYPE html>
<html lang="es">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <header>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/navbar/navbar.php"; ?>
    </header>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>

    <main class="container" style="margin-left:240px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1>Listado de Pacientes</h1>
                <div class="card shadow mt-4">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Listado de Pacientes</h2>
                        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_buscar_paciente.php"; ?>

                        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'eliminado'): ?>
                            <div class="alert alert-success text-center">Paciente eliminado correctamente.</div>
                        <?php endif; ?>

                        <div class="table-responsive mt-4">
                            <table id="tablaPacientes" class="table table-striped table-bordered w-100">
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
            </div>
        </div>
    </main>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="/public/js/PacientesTable.js"></script>
</body>
</html>
