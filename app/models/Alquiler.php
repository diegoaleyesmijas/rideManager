<?php
class Alquiler {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function registrar($dni, $fechaIni, $matricula, $fechaFin) {
        $moto = (new Moto())->getByMatricula($matricula);

        if (!$moto) {
            return ['error' => 'La moto con matrícula ' . $matricula . ' no existe'];
        }

        if ($moto['Disponible'] === 'NO') {
            return ['error' => 'La moto ' . $moto['Modelo'] . ' no está disponible'];
        }

        $dias = (strtotime($fechaFin) - strtotime($fechaIni)) / (60 * 60 * 24);

        if ($dias < 2) {
            return ['error' => 'El alquiler debe ser mínimo de 2 días'];
        }

        $precio = $dias * $moto['PrecioDia'];
        $puntos = floor($precio / 10);

        $stmt = $this->db->prepare("INSERT INTO alquileres (Dni, FechaIni, Matricula, FechaFin, DiasAlquiler, PrecioAlquiler) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis", $dni, $fechaIni, $matricula, $fechaFin, $dias, $precio);
        $stmt->execute();

        (new Moto())->updateDisponible($matricula, 'NO');
        (new Cliente())->updatePuntos($dni, $puntos);

        return [
            'success' => true,
            'modelo' => $moto['Modelo'],
            'dias' => $dias,
            'precio' => $precio,
            'puntos' => $puntos
        ];
    }

    public function getAll() {
        $result = $this->db->query("
            SELECT a.*, c.Nombre, c.Apellido, m.Modelo 
            FROM alquileres a
            JOIN clientes c ON a.Dni = c.Dni
            JOIN motos m ON a.Matricula = m.Matricula
            ORDER BY a.FechaIni DESC
        ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}