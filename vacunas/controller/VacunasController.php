<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vacunas/model/VacunasModel.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'listar') {
        $vacunas = getVacunas();
        echo json_encode($vacunas);
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'obtener' && isset($_GET['id'])) {
        $vacuna = getVacunaById($_GET['id']);
        if ($vacuna) {
            echo json_encode($vacuna);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Vacuna no encontrada']);
        }
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $exito = eliminarVacuna($_GET['id']);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

if ($method === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'crear') {
        $exito = crearVacuna($_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }

    if ($action === 'actualizar' && isset($_POST['id'])) {
        $exito = actualizarVacuna($_POST['id'], $_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

http_response_code(400);
echo json_encode(['error' => 'Acción no válida']);
