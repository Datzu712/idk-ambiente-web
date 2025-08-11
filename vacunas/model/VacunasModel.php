<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

function getVacunas() {
    $conn = Database::connect();
    $stmt = $conn->query("SELECT * FROM vacunas ORDER BY fecha_registro DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getVacunaById($id) {
    $conn = Database::connect();
    $stmt = $conn->prepare("SELECT * FROM vacunas WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function crearVacuna($data) {
    $conn = Database::connect();
    $sql = "INSERT INTO vacunas (nombre_paciente, nombre_vacuna, fecha_aplicacion, dosis, observaciones)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre_paciente'],
        $data['nombre_vacuna'],
        $data['fecha_aplicacion'],
        $data['dosis'],
        $data['observaciones']
    ]);
}

function actualizarVacuna($id, $data) {
    $conn = Database::connect();
    $sql = "UPDATE vacunas 
            SET nombre_paciente=?, nombre_vacuna=?, fecha_aplicacion=?, dosis=?, observaciones=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre_paciente'],
        $data['nombre_vacuna'],
        $data['fecha_aplicacion'],
        $data['dosis'],
        $data['observaciones'],
        $id
    ]);
}

function eliminarVacuna($id) {
    $conn = Database::connect();
    $stmt = $conn->prepare("DELETE FROM vacunas WHERE id = ?");
    return $stmt->execute([$id]);
}
