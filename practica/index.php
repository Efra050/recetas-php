<?php
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/lib/helpers.php';

$titulo = 'Todas las recetas';

$recetas = [
    ['id'=>'arroz-leche','nombre'=>'Arroz con leche','categoria'=>'Postres','fecha'=>'2026-03-15','descripcion'=>'Un postre clásico cremoso con leche, arroz, canela y azúcar morena.'],
    ['id'=>'ajiaco','nombre'=>'Ajiaco bogotano','categoria'=>'Sopas','fecha'=>'2026-03-20','descripcion'=>'Sopa tradicional colombiana con tres tipos de papas y pollo.'],
    ['id'=>'bandeja-paisa','nombre'=>'Bandeja paisa','categoria'=>'Platos fuertes','fecha'=>'2026-04-01','descripcion'=>'El plato insignia de la región antioqueña.'],
    ['id'=>'empanadas','nombre'=>'Empanadas de pipián','categoria'=>'Snacks','fecha'=>'2026-04-03','descripcion'=>'Empanadas fritas rellenas de papa y maíz.'],
];

include __DIR__ . '/vistas/header.php';
?>

<h1><?= esc($titulo) ?></h1>

<div class="row">
<?php foreach ($recetas as $receta): ?>
    <div class="col-md-6">
        <div class="card p-3 mb-3">
            <span class="badge bg-secondary"><?= esc($receta['categoria']) ?></span>
            <h5><?= esc($receta['nombre']) ?></h5>
            <p><?= esc(extracto($receta['descripcion'], 80)) ?></p>
            <small><?= formatearFecha($receta['fecha']) ?></small><br>
            <a href="receta.php?id=<?= esc($receta['id']) ?>" class="btn btn-primary btn-sm mt-2">
                Ver receta
            </a>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?php include __DIR__ . '/vistas/footer.php'; ?>