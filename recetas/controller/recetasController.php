<?php

header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/recetas/model/Receta.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'listar') {
        $recetas = getRecetas();
        echo json_encode($recetas);
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'obtener' && isset($_GET['id'])) {
        $receta = getRecetaById($_GET['id']);
        if ($receta) {
            echo json_encode($receta);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Receta no encontrada']);
        }
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $exito = eliminarReceta($_GET['id']);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

if ($method === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'crear') {
        $exito = crearReceta($_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }

    if ($action === 'actualizar' && isset($_POST['id'])) {
        $exito = actualizarReceta($_POST['id'], $_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

http_response_code(400);
echo json_encode(['error' => 'Acción no válida']);
