<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

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
        }
        .navbar-nav a {
            margin-right: 15px;
        }
        .container {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
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
    </nav>
    <div class="site-index">
        <div class="jumbotron text-center bg-transparent mt-5 mb-5">
            <h1 class="display-4">Bienvenido a YII Framework</h1>
        </div>
        <div class="body-content">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <h2>Productos</h2>
                    <p>Metodos para los productos </p>
                    <p><a class="btn btn-outline-secondary" href="/crud1">Ir a los Productos &raquo;</a></p>
                </div>
                <div class="col-lg-4 mb-3">
                    <h2>Usuarios</h2>
                    <p>Metodos para los usuarios</p>
                    <p><a class="btn btn-outline-secondary" href="/crud2">Ir a los usuarios &raquo;</a></p>
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
        </div>

    </div>
</div>
