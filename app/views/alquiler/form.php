<?php
ob_start();
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4">
            <h2 class="mb-4">📋 Nuevo Alquiler</h2>
            <form method="POST" action="index.php?action=registrar">
                <div class="mb-3">
                    <label class="form-label">Cliente</label>
                    <select name="dni" class="form-select" required>
                        <option value="">Selecciona un cliente...</option>
                        <?php foreach ($clientes as $cliente): ?>
                            <option value="<?= $cliente['Dni'] ?>">
                                <?= $cliente['Nombre'] ?> <?= $cliente['Apellido'] ?> - <?= $cliente['Dni'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Moto disponible</label>
                    <select name="matricula" class="form-select" required>
                        <option value="">Selecciona una moto...</option>
                        <?php foreach ($motos as $moto): ?>
                            <option value="<?= $moto['Matricula'] ?>">
                                <?= $moto['Modelo'] ?> - <?= $moto['PrecioDia'] ?>€/día
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha inicio</label>
                    <input type="date" name="fechaini" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha fin</label>
                    <input type="date" name="fechafin" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrar Alquiler</button>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>