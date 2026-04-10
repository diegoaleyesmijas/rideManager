<?php ob_start(); ?>
<div class="row">
    <div class="col-12 text-center mb-4">
        <h1 class="display-4">🏍️ RideManager</h1>
        <p class="lead text-muted">Sistema de gestión de alquiler de motos</p>
    </div>
</div>
<div class="row g-4">
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="display-1">🏍️</div>
            <h4 class="mt-3">Motos</h4>
            <p class="text-muted">Gestiona el inventario de motos</p>
            <a href="index.php?action=motos" class="btn btn-primary">Ver Motos</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="display-1">👥</div>
            <h4 class="mt-3">Clientes</h4>
            <p class="text-muted">Consulta clientes y ecoPuntos</p>
            <a href="index.php?action=clientes" class="btn btn-primary">Ver Clientes</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="display-1">📋</div>
            <h4 class="mt-3">Nuevo Alquiler</h4>
            <p class="text-muted">Registra un nuevo alquiler</p>
            <a href="index.php?action=alquiler" class="btn btn-primary">Alquilar</a>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
?>