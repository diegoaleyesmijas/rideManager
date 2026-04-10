<?php
class Cliente {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM clientes ORDER BY Apellido");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getByDni($dni) {
        $stmt = $this->db->prepare("SELECT * FROM clientes WHERE Dni = ?");
        $stmt->bind_param("s", $dni);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function updatePuntos($dni, $puntos) {
        $stmt = $this->db->prepare("UPDATE clientes SET ecoPuntos = ecoPuntos + ? WHERE Dni = ?");
        $stmt->bind_param("is", $puntos, $dni);
        $stmt->execute();
    }
}