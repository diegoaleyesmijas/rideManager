<?php
class MotoController {
    public function listar() {
        $motos = (new Moto())->getAll();
        require __DIR__ . '/../views/motos/listar.php';
    }
}