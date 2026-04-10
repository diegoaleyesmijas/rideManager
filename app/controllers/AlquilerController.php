<?php
class AlquilerController {
    public function form() {
        $motos = (new Moto())->getDisponibles();
        $clientes = (new Cliente())->getAll();
        require __DIR__ . '/../views/alquiler/form.php';
    }

    public function registrar() {
        $dni = $_POST['dni'];
        $fechaIni = $_POST['fechaini'];
        $matricula = $_POST['matricula'];
        $fechaFin = $_POST['fechafin'];
        $resultado = (new Alquiler())->registrar($dni, $fechaIni, $matricula, $fechaFin);
        require __DIR__ . '/../views/alquiler/resultado.php';
    }
}