<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';
header('Content-Type: application/json');

try {
    $conn = Database::connect();
    $identificacion = isset($_GET['identificacion']) ? $_GET['identificacion'] . '%' : '%';
    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE identificacion LIKE :identificacion");
    $stmt->bindParam(':identificacion', $identificacion);
    $stmt->execute();
    $pacientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($pacientes);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de base de datos: ' . $e->getMessage()]);
}
