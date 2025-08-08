<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

$conn = Database::connect();

$paciente = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE id = :id");
    $stmt->execute([':id' => $_GET['id']]);
    $paciente = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$paciente) {
        die("Paciente no encontrado.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = (int) $_POST['id'];

        $data = [
            ':nombre' => $_POST['nombre'],
            ':apellidos' => $_POST['apellidos'],
            ':identificacion' => $_POST['identificacion'],
            ':edad' => $_POST['edad'],
            ':sexo' => $_POST['sexo'],
            ':sintomas' => $_POST['sintomas'],
            ':posible_afliccion' => $_POST['posible_afliccion'],
            ':diagnostico' => $_POST['diagnostico'],
            ':fecha_ingreso' => $_POST['fecha_ingreso'],
            ':id' => $id
        ];

        $sql = "UPDATE pacientes 
                SET nombre = :nombre, apellidos = :apellidos, identificacion = :identificacion,
                    edad = :edad, sexo = :sexo, sintomas = :sintomas, 
                    posible_afliccion = :posible_afliccion, diagnostico = :diagnostico, 
                    fecha_ingreso = :fecha_ingreso
                WHERE id = :id";

        $stmt = $conn->prepare($sql);
        if ($stmt->execute($data)) {
            header("Location: /views/patients/mostrarPacientes.php?msg=actualizado");
            exit;
        } else {
            $error = "Error al actualizar el paciente.";
        }
    } else {
        $error = "ID inválido.";
    }
}
?>

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
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="text-center mt-4 mb-4">Actualización de los Pacientes</h1>
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Actualizar Información del Paciente</h2>

                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                        <?php endif; ?>

                        <?php if ($paciente): ?>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">ID del Paciente</label>
                                    <input type="text" class="form-control" value="<?= htmlspecialchars($paciente['id']) ?>" readonly>
                                </div>
                                <input type="hidden" name="id" value="<?= htmlspecialchars($paciente['id']) ?>">

                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['nombre']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Apellidos</label>
                                    <input type="text" name="apellidos" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['apellidos']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Identificación</label>
                                    <input type="text" name="identificacion" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['identificacion']) ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Edad</label>
                                    <input type="number" name="edad" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['edad']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sexo</label>
                                    <select name="sexo" class="form-select">
                                        <option value="Masculino" <?= $paciente['sexo'] === 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                                        <option value="Femenino" <?= $paciente['sexo'] === 'Femenino' ? 'selected' : '' ?>>Femenino</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Síntomas</label>
                                    <textarea name="sintomas" class="form-control"><?= htmlspecialchars($paciente['sintomas']) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Posible Afección</label>
                                    <input type="text" name="posible_afliccion" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['posible_afliccion']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Diagnóstico</label>
                                    <textarea name="diagnostico" class="form-control"><?= htmlspecialchars($paciente['diagnostico']) ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Fecha de Ingreso</label>
                                    <input type="date" name="fecha_ingreso" class="form-control" 
                                           value="<?= htmlspecialchars($paciente['fecha_ingreso']) ?>" required>
                                </div>
                                <button type="submit" class="btn btn-warning w-100">Actualizar</button>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-info text-center">Seleccione un paciente para actualizar</div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/public/js/SidebarLayout.js"></script>
</body>
</html>
