<?php
ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🏍️ Motos</h2>
    <a href="index.php?action=alquiler" class="btn btn-primary">+ Nuevo Alquiler</a>
</div>
<div class="row g-3">
<?php foreach ($motos as $moto): ?>
    <div class="col-md-4">
        <div class="card p-3">
            <h5><?= $moto['Modelo'] ?></h5>
            <p class="text-muted mb-1">Matrícula: <strong><?= $moto['Matricula'] ?></strong></p>
            <p class="text-muted mb-1">Precio/día: <strong><?= $moto['PrecioDia'] ?>€</strong></p>
            <span class="badge <?= $moto['Disponible'] === 'SI' ? 'bg-success' : 'bg-danger' ?>">
                <?= $moto['Disponible'] === 'SI' ? '✅ Disponible' : '❌ No disponible' ?>
            </span>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>