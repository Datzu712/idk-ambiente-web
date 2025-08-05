<?php
//Datos a insertar
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$identificacion = strval(strtolower(trim($_POST['identificacion'])));
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$sintomas = $_POST['sintomas'];
$posibleAfliccion = $_POST['posibleAfliccion'];
$dignostico = $_POST['diagnostico'];
$fecha = $_POST['fecha'];


//Conexión a la base de datos
$servernombre = "db";
$dbnombre = "idk_ambiente_web";
$usernombre = "root";
$password = "1234";
$exito = "/views/patients/registro.php";

try {
    $conn = new PDO("mysql:host=$servernombre;dbname=$dbnombre;charset=utf8mb4", $usernombre, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO pacientes (nombre,apellidos,identificacion,edad,sexo,sintomas,posible_afliccion,diagnostico,fecha_ingreso) VALUES (:nombre,:apellidos,:identificacion,:edad,:sexo,:sintomas,:posibleAfliccion,:diagnostico,:fecha)");

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidos', $apellidos);
    $stmt->bindParam(':identificacion', $identificacion);
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->bindParam(':sintomas', $sintomas);
    $stmt->bindParam(':posibleAfliccion', $posibleAfliccion);
    $stmt->bindParam(':diagnostico', $diagnostico);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->execute();
    header("Location: " . $exito . "?status=success");
    exit(); 

} catch (PDOException $e) {
    header("Location: " . $exito . "?status=error");

} finally {
    $conn = null;
}
?>