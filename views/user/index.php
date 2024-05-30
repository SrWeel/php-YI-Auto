<?php

use app\models\tbl_usuario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usu_id',
            'tusu_id',
            'usu_cedula',
            'usu_nombre',
            'usu_correo',
            //'usu_contra',
            //'usu_estado',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, tbl_usuario $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'usu_id' => $model->usu_id]);
                 }
            ],
        ],
    ]); ?>


</div>
