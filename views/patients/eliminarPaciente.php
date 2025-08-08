<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

if (!isset($_GET['id'])) {
    die("ID no proporcionado");
}

$id = $_GET['id'];

$conn = Database::connect();

$stmt = $conn->prepare("DELETE FROM pacientes WHERE id = :id");
if ($stmt->execute([':id' => $id])) {
    header("Location: /views/patients/mostrarPacientes.php?msg=eliminado");
    exit;
} else {
    echo "Error al eliminar el paciente.";
}
?>
