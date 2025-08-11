<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/patients/model/pacientesModel.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // Listar o buscar paciente
    if (isset($_GET['action']) && $_GET['action'] === 'listar') {
        $pacientes = getPacientes();
        echo json_encode($pacientes);
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'obtener' && isset($_GET['id'])) {
        $paciente = getPacienteById($_GET['id']);
        if ($paciente) {
            echo json_encode($paciente);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Paciente no encontrado']);
        }
        exit;
    }

    if (isset($_GET['action']) && $_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $exito = eliminarPaciente($_GET['id']);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

if ($method === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'crear') {
        $exito = crearPaciente($_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }

    if ($action === 'actualizar' && isset($_POST['id'])) {
        $exito = actualizarPaciente($_POST['id'], $_POST);
        echo json_encode(['success' => $exito]);
        exit;
    }
}

http_response_code(400);
echo json_encode(['error' => 'Acción no válida']);
