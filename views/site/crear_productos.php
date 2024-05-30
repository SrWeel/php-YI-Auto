<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Crear Producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['listar-productos']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_cantidad')->textInput() ?>

    <?= $form->field($model, 'pro_precio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
