<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\tbl_tipo_usuario $model */

$this->title = 'Create Tbl Tipo Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Tipo Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-tipo-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
