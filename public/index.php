<?php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../app/models/Cliente.php';
require_once __DIR__ . '/../app/models/Moto.php';
require_once __DIR__ . '/../app/models/Alquiler.php';
require_once __DIR__ . '/../app/controllers/ClienteController.php';
require_once __DIR__ . '/../app/controllers/MotoController.php';
require_once __DIR__ . '/../app/controllers/AlquilerController.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'alquiler':
        $controller = new AlquilerController();
        $controller->form();
        break;
    case 'registrar':
        $controller = new AlquilerController();
        $controller->registrar();
        break;
    case 'motos':
        $controller = new MotoController();
        $controller->listar();
        break;
    case 'clientes':
        $controller = new ClienteController();
        $controller->listar();
        break;
    default:
        require __DIR__ . '/../app/views/home.php';
        break;
}