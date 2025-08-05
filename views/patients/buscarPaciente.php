<?php

header('Content-Type: application/json');

$servernombre = "db";
$dbnombre = "idk_ambiente_web";
$usernombre = "root";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servernombre;dbname=$dbnombre;charset=utf8mb4", $usernombre, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $identificacion = isset($_GET['identificacion']) ? $_GET['identificacion'] . '%' : '%';

    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE identificacion LIKE :identificacion");
    $stmt->bindParam(':identificacion', $identificacion);
    $stmt->execute();
    $pacientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($pacientes);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de base de datos: ' . $e->getMessage()]);
} finally {
    $conn = null;
}
