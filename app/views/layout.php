<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideManager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; color: #ff6b00 !important; }
        .btn-primary { background-color: #ff6b00; border-color: #ff6b00; }
        .btn-primary:hover { background-color: #e55d00; border-color: #e55d00; }
        .card { border: none; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .badge-disponible { background-color: #28a745; }
        .badge-nodisponible { background-color: #dc3545; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">🏍️ RideManager</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" href="index.php">Inicio</a>
            <a class="nav-link text-white" href="index.php?action=motos">Motos</a>
            <a class="nav-link text-white" href="index.php?action=clientes">Clientes</a>
            <a class="nav-link text-white" href="index.php?action=alquiler">Nuevo Alquiler</a>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <?= $content ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>