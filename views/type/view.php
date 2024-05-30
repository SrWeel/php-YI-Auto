<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\tbl_tipo_usuario $model */

$this->title = $model->tusu_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tipo Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-tipo-usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tusu_id' => $model->tusu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tusu_id' => $model->tusu_id], [
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
            'tusu_id',
            'tusu_nombre',
            'tusu_estado',
        ],
    ]) ?>

</div>
