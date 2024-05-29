<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

// Verificar si el formulario de inicio de sesión se ha enviado
if ($model->load(Yii::$app->request->post()) && $model->login()) {
    // Redireccionar al usuario a admin.php si las credenciales son correctas
    return $this->redirect(Yii::$app->urlManager->createUrl(['site/admin']));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f5f5f5;
        }
        .container {
            flex: 1;
        }
        .site-login {
            margin-top: 50px;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group .btn-primary {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            border: none;
        }
        .form-group .btn-primary:hover {
            background: linear-gradient(135deg, #a777e3, #6e8efb);
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PROYECTO DE INVENTARIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="site-login mx-auto">
            <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
            <p class="text-center">Por favor, complete los siguientes campos para iniciar sesión:</p>

            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => [
                            'template' => "{label}\n{input}\n{error}",
                            'labelOptions' => ['class' => 'col-form-label'],
                            'inputOptions' => ['class' => 'form-control'],
                            'errorOptions' => ['class' => 'invalid-feedback'],
                        ],
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div>{error}</div>",
                    ]) ?>

                    <div class="form-group text-center">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <div class="text-muted text-center">
                        Puede iniciar sesión con <strong>admin/admin</strong> o <strong>demo/demo</strong>.<br>
                        Para modificar el nombre de usuario/contraseña, consulte el código en <code>app\models\User::$users</code>.
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; <?= date('Y') ?> Proyecto Inventario. Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
