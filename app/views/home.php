<?php ob_start(); ?>
<div class="hero" style="margin-left: -12px; margin-right: -12px; padding-left: 12px; padding-right: 12px;">
    <div class="container">
        <p>Sistema de gestión</p>
        <h1>RIDE<span>MANAGER</span></h1>
        <p class="mt-3">Gestión de flotas · Alquileres · ecoPuntos</p>
        <a href="index.php?action=alquiler" class="btn btn-primary mt-4">Nuevo Alquiler</a>
    </div>
</div>

<div class="row g-0">
    <div class="col-md-4">
        <div class="card p-4 h-100">
            <div style="font-size: 2rem;">🏍️</div>
            <h5 class="mt-3 fw-700">Motos</h5>
            <p class="text-muted" style="font-size: 0.9rem;">Inventario y disponibilidad en tiempo real</p>
            <a href="index.php?action=motos" class="btn btn-primary mt-auto">Ver flota</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 h-100">
            <div style="font-size: 2rem;">👥</div>
            <h5 class="mt-3">Clientes</h5>
            <p class="text-muted" style="font-size: 0.9rem;">Gestión de clientes y ecoPuntos acumulados</p>
            <a href="index.php?action=clientes" class="btn btn-primary mt-auto">Ver clientes</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-4 h-100">
            <div style="font-size: 2rem;">📋</div>
            <h5 class="mt-3">Alquileres</h5>
            <p class="text-muted" style="font-size: 0.9rem;">Registra alquileres con validaciones automáticas</p>
            <a href="index.php?action=alquiler" class="btn btn-primary mt-auto">Alquilar</a>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
?>