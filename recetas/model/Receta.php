<?php
class Receta {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listar() {
        $stmt = $this->conn->query("SELECT * FROM recetas ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($data) {
        $sql = "INSERT INTO recetas 
          (nombre_paciente, nombre_medico, medicamento, dosis, frecuencia, fecha, observaciones) 
          VALUES (:nombre_paciente, :nombre_medico, :medicamento, :dosis, :frecuencia, :fecha, :observaciones)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nombre_paciente' => $data['nombre_paciente'],
            ':nombre_medico' => $data['nombre_medico'],
            ':medicamento' => $data['medicamento'],
            ':dosis' => $data['dosis'],
            ':frecuencia' => $data['frecuencia'],
            ':fecha' => $data['fecha'],
            ':observaciones' => $data['observaciones'] ?? null,
        ]);
    }

    public function actualizar($data) {
        $sql = "UPDATE recetas SET 
            nombre_paciente = :nombre_paciente,
            nombre_medico = :nombre_medico,
            medicamento = :medicamento,
            dosis = :dosis,
            frecuencia = :frecuencia,
            fecha = :fecha,
            observaciones = :observaciones
            WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nombre_paciente' => $data['nombre_paciente'],
            ':nombre_medico' => $data['nombre_medico'],
            ':medicamento' => $data['medicamento'],
            ':dosis' => $data['dosis'],
            ':frecuencia' => $data['frecuencia'],
            ':fecha' => $data['fecha'],
            ':observaciones' => $data['observaciones'] ?? null,
            ':id' => $data['id'],
        ]);
    }

    public function eliminar($id) {
        $stmt = $this->conn->prepare("DELETE FROM recetas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
