<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\tbl_usuario $model */

$this->title = $model->usu_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'usu_id' => $model->usu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'usu_id' => $model->usu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'usu_id',
            'tusu_id',
            'usu_cedula',
            'usu_nombre',
            'usu_correo',
            'usu_contra',
            'usu_estado',
        ],
    ]) ?>

</div>
