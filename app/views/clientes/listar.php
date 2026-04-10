<?php
ob_start();
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>👥 Clientes</h2>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>ecoPuntos</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <?php
                $puntos = $cliente['ecoPuntos'];
                if ($puntos <= 100) $categoria = '🥉 Bronce';
                elseif ($puntos <= 500) $categoria = '🥈 Plata';
                elseif ($puntos <= 1000) $categoria = '🥇 Oro';
                else $categoria = '💎 Platino';
                ?>
                <tr>
                    <td><?= $cliente['Dni'] ?></td>
                    <td><?= $cliente['Nombre'] ?></td>
                    <td><?= $cliente['Apellido'] ?></td>
                    <td><strong><?= $cliente['ecoPuntos'] ?></strong></td>
                    <td><?= $categoria ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>
