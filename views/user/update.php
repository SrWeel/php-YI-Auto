<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\tbl_usuario $model */

$this->title = 'Update Tbl Usuario: ' . $model->usu_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->usu_id, 'url' => ['view', 'usu_id' => $model->usu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
