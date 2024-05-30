<?php

use app\models\tbl_tipo_usuario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Tipo Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tipo-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Tipo Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tusu_id',
            'tusu_nombre',
            'tusu_estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, tbl_tipo_usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tusu_id' => $model->tusu_id]);
                 }
            ],
        ],
    ]); ?>


</div>
