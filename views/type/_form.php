<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\tbl_tipo_usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-tipo-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tusu_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tusu_estado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
