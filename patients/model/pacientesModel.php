<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

function getPacientes() {
    $conn = Database::connect();
    $stmt = $conn->query("SELECT * FROM pacientes ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPacienteById($id) {
    $conn = Database::connect();
    $stmt = $conn->prepare("SELECT * FROM pacientes WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function crearPaciente($data) {
    $conn = Database::connect();
    $sql = "INSERT INTO pacientes (nombre, apellidos, identificacion, edad, sexo, sintomas, posible_afliccion, diagnostico, fecha_ingreso)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre'],
        $data['apellidos'],
        strtolower(trim($data['identificacion'])),
        $data['edad'],
        $data['sexo'],
        $data['sintomas'],
        $data['posibleAfliccion'],
        $data['diagnostico'],
        $data['fecha']
    ]);
}

function actualizarPaciente($id, $data) {
    $conn = Database::connect();
    $sql = "UPDATE pacientes SET nombre=?, apellidos=?, identificacion=?, edad=?, sexo=?, sintomas=?, posible_afliccion=?, diagnostico=?, fecha_ingreso=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre'],
        $data['apellidos'],
        strtolower(trim($data['identificacion'])),
        $data['edad'],
        $data['sexo'],
        $data['sintomas'],
        $data['posibleAfliccion'],
        $data['diagnostico'],
        $data['fecha'],
        $id
    ]);
}

function eliminarPaciente($id) {
    $conn = Database::connect();
    $stmt = $conn->prepare("DELETE FROM pacientes WHERE id = ?");
    return $stmt->execute([$id]);
}
