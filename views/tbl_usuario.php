<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\tbl_usuario $model */
/** @var ActiveForm $form */
?>
<div class="tbl_usuario">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tusu_id') ?>
        <?= $form->field($model, 'usu_cedula') ?>
        <?= $form->field($model, 'usu_nombre') ?>
        <?= $form->field($model, 'usu_correo') ?>
        <?= $form->field($model, 'usu_contra') ?>
        <?= $form->field($model, 'usu_estado') ?>
        <?= $form->field($model, 'usu_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tbl_usuario -->
