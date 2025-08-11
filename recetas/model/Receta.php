<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

function getRecetas()
{
    $conn = Database::connect();
    $stmt = $conn->query("SELECT * FROM recetas ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getRecetaById($id)
{
    $conn = Database::connect();
    $stmt = $conn->prepare("SELECT * FROM recetas WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function crearReceta($data)
{
    $conn = Database::connect();
    $sql = "INSERT INTO recetas (nombre_paciente, nombre_medico, medicamento, dosis, frecuencia, fecha, observaciones)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre_paciente'],
        $data['nombre_medico'],
        $data['medicamento'],
        $data['dosis'],
        $data['frecuencia'],
        $data['fecha'],
        $data['observaciones']
    ]);
}

function actualizarReceta($id, $data)
{
    $conn = Database::connect();
    $sql = "UPDATE recetas 
            SET nombre_paciente=?, nombre_medico=?, medicamento=?, dosis=?, frecuencia=?, fecha=?, observaciones=?
            WHERE id=?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        $data['nombre_paciente'],
        $data['nombre_medico'],
        $data['medicamento'],
        $data['dosis'],
        $data['frecuencia'],
        $data['fecha'],
        $data['observaciones'],
        $id
    ]);
}

function eliminarReceta($id)
{
    $conn = Database::connect();
    $stmt = $conn->prepare("DELETE FROM recetas WHERE id = ?");
    return $stmt->execute([$id]);
}
