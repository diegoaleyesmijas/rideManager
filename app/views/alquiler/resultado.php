<?php
ob_start();
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4 text-center">
            <?php if (isset($resultado['error'])): ?>
                <div class="display-1">❌</div>
                <h3 class="text-danger mt-3">Error</h3>
                <p class="text-muted"><?= $resultado['error'] ?></p>
            <?php else: ?>
                <div class="display-1">✅</div>
                <h3 class="text-success mt-3">¡Alquiler registrado!</h3>
                <table class="table mt-3 text-start">
                    <tr><td><strong>Moto</strong></td><td><?= $resultado['modelo'] ?></td></tr>
                    <tr><td><strong>Días</strong></td><td><?= $resultado['dias'] ?></td></tr>
                    <tr><td><strong>Precio total</strong></td><td><?= $resultado['precio'] ?>€</td></tr>
                    <tr><td><strong>ecoPuntos ganados</strong></td><td>+<?= $resultado['puntos'] ?> 🌱</td></tr>
                </table>
            <?php endif; ?>
            <div class="mt-3">
                <a href="index.php?action=alquiler" class="btn btn-primary me-2">Nuevo Alquiler</a>
                <a href="index.php" class="btn btn-outline-secondary">Inicio</a>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>