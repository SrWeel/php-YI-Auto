<?php
use yii\helpers\Html;

$this->title = 'Listado de Productos';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= Html::encode($producto->pro_id) ?></td>
                <td><?= Html::encode($producto->pro_nombre) ?></td>
                <td><?= Html::encode($producto->pro_cantidad) ?></td>
                <td><?= Html::encode($producto->pro_precio) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
