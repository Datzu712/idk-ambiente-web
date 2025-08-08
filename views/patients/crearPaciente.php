<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

//Datos a insertar
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$identificacion = strval(strtolower(trim($_POST['identificacion'])));
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$sintomas = $_POST['sintomas'];
$posibleAfliccion = $_POST['posibleAfliccion'];
$diagnostico = $_POST['diagnostico'];
$fecha = $_POST['fecha'];
$exito = "/views/patients/registro.php";

try {
    $conn = Database::connect();
    $stmt = $conn->prepare("INSERT INTO pacientes (nombre,apellidos,identificacion,edad,sexo,sintomas,posible_afliccion,diagnostico,fecha_ingreso) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nombre, $apellidos, $identificacion, $edad, $sexo, $sintomas, $posibleAfliccion, $diagnostico, $fecha]);
    header("Location: " . $exito . "?status=success");
    exit();
} catch (Exception $e) {
    header("Location: " . $exito . "?status=error");
}
