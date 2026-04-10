<?php
class ClienteController {
    public function listar() {
        $clientes = (new Cliente())->getAll();
        require __DIR__ . '/../views/clientes/listar.php';
    }
}