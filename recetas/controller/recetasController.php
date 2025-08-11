<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'].'/config/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/recetas/model/Receta.php';

$conn = Database::connect();
$recetas = new Recetas($conn);

$action = $_REQUEST['action'] ?? 'listar';

header('Content-Type: application/json');

try {
    if ($action == 'listar') {
        $recetas = $receta->listar();
        echo json_encode($recetas);

    } elseif ($action == 'crear') {
        $success = $receta->crear($_POST);
        echo json_encode(['success' => $success]);

    } elseif ($action == 'actualizar') {
        $success = $receta->actualizar($_POST);
        echo json_encode(['success' => $success]);

    } elseif ($action == 'eliminar') {
        $id = $_GET['id'] ?? 0;
        $success = $receta->eliminar($id);
        echo json_encode(['success' => $success]);

    } else {
        echo json_encode(['success' => false, 'message' => 'Acción no válida']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
