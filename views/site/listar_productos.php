<?php
use yii\helpers\Html;

$this->title = 'Listado de Productos';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>


<p>
    <a href="<?= Yii::$app->urlManager->createUrl(['site/crear-producto']) ?>" class="btn btn-lg btn-primary">Crear Producto &raquo;</a>
</p>



<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>

            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= Html::encode($producto->pro_id) ?></td>
                <td><?= Html::encode($producto->pro_nombre) ?></td>
                <td><?= Html::encode($producto->pro_cantidad) ?></td>
                <td><?= Html::encode($producto->pro_precio) ?></td>

                <td>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/editar-producto', 'id' => $producto->pro_id]) ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/eliminar-producto', 'id' => $producto->pro_id]) ?>" class="btn btn-sm btn-danger" data-method="post" data-confirm="¿Estás seguro de que deseas eliminar este producto?">Eliminar</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
