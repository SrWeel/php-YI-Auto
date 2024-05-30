<?php
use yii\helpers\Html;

$this->title = 'Listado de Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <a href="<?= Yii::$app->urlManager->createUrl(['site/crear-cliente']) ?>" class="btn btn-lg btn-primary">Crear Cliente &raquo;</a>
</p>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= Html::encode($cliente->usu_id) ?></td>
                <td><?= Html::encode($cliente->usu_cedula) ?></td>
                <td><?= Html::encode($cliente->usu_nombre) ?></td>
                <td><?= Html::encode($cliente->usu_correo) ?></td>
                <td><?= Html::encode($cliente->usu_estado) ?></td>
                <td>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/editar-cliente', 'id' => $cliente->usu_id]) ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/eliminar-cliente', 'id' => $cliente->usu_id]) ?>" class="btn btn-sm btn-danger" data-method="post" data-confirm="¿Estás seguro de que deseas eliminar este cliente?">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
