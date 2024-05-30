<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\tbl_tipo_usuario $model */

$this->title = 'Update Tbl Tipo Usuario: ' . $model->tusu_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tipo Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tusu_id, 'url' => ['view', 'tusu_id' => $model->tusu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-tipo-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
