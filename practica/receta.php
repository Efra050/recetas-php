<?php
require_once __DIR__ . '/config/app.php';
require_once __DIR__ . '/lib/helpers.php';

$catalogo = [
    'arroz-leche'=>[
        'nombre'=>'Arroz con leche',
        'categoria'=>'Postres',
        'fecha'=>'2026-03-15',
        'descripcion'=>'Un postre clásico cremoso.',
        'ingredientes'=>['Arroz','Leche','Canela','Azúcar']
    ],
    'ajiaco'=>[
        'nombre'=>'Ajiaco bogotano',
        'categoria'=>'Sopas',
        'fecha'=>'2026-03-20',
        'descripcion'=>'Sopa tradicional colombiana.',
        'ingredientes'=>['Papa','Pollo','Guasca']
    ]
];

$id = $_GET['id'] ?? '';

if (!array_key_exists($id, $catalogo)) {
    header('Location: index.php');
    exit;
}

$receta = $catalogo[$id];
$titulo = $receta['nombre'];

include __DIR__ . '/vistas/header.php';
?>

<a href="index.php" class="btn btn-secondary mb-3">Volver</a>

<h1><?= esc($receta['nombre']) ?></h1>
<p><?= formatearFecha($receta['fecha']) ?></p>
<p><?= esc($receta['descripcion']) ?></p>

<h5>Ingredientes:</h5>
<ul>
<?php foreach ($receta['ingredientes'] as $ing): ?>
    <li><?= esc($ing) ?></li>
<?php endforeach; ?>
</ul>

<?php include __DIR__ . '/vistas/footer.php'; ?>