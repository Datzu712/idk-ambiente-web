<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/db.php';

class CitaModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function listar()
    {
        $stmt = $this->conn->prepare("SELECT * FROM citas ORDER BY fecha DESC, hora DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($datos)
    {
        $stmt = $this->conn->prepare("INSERT INTO citas (nombre_paciente, fecha, hora, estado, nombre_usuario) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $datos['nombre_paciente'],
            $datos['fecha'],
            $datos['hora'],
            $datos['estado'],
            $datos['nombre_usuario']
        ]);
    }

    public function actualizar($datos)
    {
        $stmt = $this->conn->prepare("UPDATE citas SET nombre_paciente = ?, fecha = ?, hora = ?, estado = ?, nombre_usuario = ? WHERE id = ?");
        return $stmt->execute([
            $datos['nombre_paciente'],
            $datos['fecha'],
            $datos['hora'],
            $datos['estado'],
            $datos['nombre_usuario'],
            $datos['id']
        ]);
    }

    public function eliminar($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM citas WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function obtenerPorId($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM citas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
