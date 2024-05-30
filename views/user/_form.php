<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\tbl_usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'tusu_id')->dropDownList(
            \yii\helpers\ArrayHelper::map(\app\models\tbl_tipo_usuario::find()->all(), 'tusu_id', 'tusu_nombre'), ['prompt' => 'Seleccionar Tipo de Usuario']
    )
    ?>


    <?= $form->field($model, 'usu_cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usu_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usu_correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usu_contra')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'usu_estado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>