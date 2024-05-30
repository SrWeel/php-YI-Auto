<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
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
            .navbar {
                margin-bottom: 20px;
            }
            .navbar-brand {
                font-weight: bold;
            }
            .jumbotron {
                background: linear-gradient(135deg, #6e8efb, #a777e3);
                color: white;
            }
            .jumbotron h1 {
                font-size: 3.5rem;
            }
            .card {
                transition: transform 0.3s, box-shadow 0.3s;
            }
            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            }
            footer {
                background-color: #343a40;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
            .container {
                flex: 1;
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


            </div>
        </nav>
        <div class="site-index">
            <div class="jumbotron text-center bg-transparent mt-5 mb-5">
                <h1 class="display-4">Bienvenido a YII Framework</h1>
            </div>
            <div class="body-content">
                <div class="container">
                    <div class="row">

                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h2 class="card-title">Productos</h2>
                                <p class="card-text">Métodos para los productos.</p>
                                <!-- Botón con estilos del otro código y funcionalidad -->
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/listar-productos']) ?>" class="btn btn-lg btn-primary">Ir a los Productos &raquo;</a>
                            </div>
                        </div>

                         <div class="card h-100">
                            <div class="card-body text-center">
                                <h2 class="card-title">Usuarios</h2>
                                <p class="card-text">Métodos para los productos.</p>
                                <!-- Botón con estilos del otro código y funcionalidad -->
                                <a href="<?= Yii::$app->urlManager->createUrl(['user/index']) ?>" class="btn btn-lg btn-primary">Ir a los Productos &raquo;</a>
                            </div>
                        </div>

                        <div class="card-body text-center">
                            <h2 class="card-title">Tipo de Usuario</h2>
                            <p class="card-text">Métodos para los productos.</p>
                            <!-- Botón con estilos del otro código y funcionalidad -->
                            <a href="<?= Yii::$app->urlManager->createUrl(['type/index']) ?>" class="btn btn-lg btn-primary">Ir a los Productos &raquo;</a>
                        </div>

                    </div>







                </div>
            </div>
        </div>
        <footer>

            <p>&copy; <?= date('Y') ?> Proyecto Autónomo.</p>

        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
