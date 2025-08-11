<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/citas/model/CitaModel.php';

header('Content-Type: application/json');

$model = new CitaModel();

$action = $_GET['action'] ?? $_POST['action'] ?? '';

try {
    switch ($action) {
        case 'listar':
            echo json_encode($model->listar());
            break;

        case 'crear':
            $datos = [
                'nombre_paciente' => $_POST['nombre_paciente'] ?? '',
                'fecha' => $_POST['fecha'] ?? '',
                'hora' => $_POST['hora'] ?? '',
                'estado' => $_POST['estado'] ?? 'pendiente',
                'nombre_usuario' => $_POST['nombre_usuario'] ?? ''
            ];
            $success = $model->crear($datos);
            echo json_encode(['success' => $success]);
            break;

        case 'actualizar':
            $datos = [
                'id' => $_POST['id'] ?? 0,
                'nombre_paciente' => $_POST['nombre_paciente'] ?? '',
                'fecha' => $_POST['fecha'] ?? '',
                'hora' => $_POST['hora'] ?? '',
                'estado' => $_POST['estado'] ?? 'pendiente',
                'nombre_usuario' => $_POST['nombre_usuario'] ?? ''
            ];
            $success = $model->actualizar($datos);
            echo json_encode(['success' => $success]);
            break;

        case 'eliminar':
            $id = $_GET['id'] ?? 0;
            $success = $model->eliminar($id);
            echo json_encode(['success' => $success]);
            break;

        default:
            http_response_code(400);
            echo json_encode(['error' => 'Acción no válida']);
            break;
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
