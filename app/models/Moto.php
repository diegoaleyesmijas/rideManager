<?php
class Moto {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM motos ORDER BY Modelo");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getByMatricula($matricula) {
        $stmt = $this->db->prepare("SELECT * FROM motos WHERE Matricula = ?");
        $stmt->bind_param("s", $matricula);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updateDisponible($matricula, $estado) {
        $stmt = $this->db->prepare("UPDATE motos SET Disponible = ? WHERE Matricula = ?");
        $stmt->bind_param("ss", $estado, $matricula);
        $stmt->execute();
    }

    public function getDisponibles() {
        $result = $this->db->query("SELECT * FROM motos WHERE Disponible = 'SI' ORDER BY Modelo");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}