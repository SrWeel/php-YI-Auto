<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\tbl_producto;

use app\models\tbl_usuario;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionListarProductos()
    {
        $productos = tbl_producto::find()->all();
        return $this->render('listar_productos', [
            'productos' => $productos,
        ]);
    }

    
    public function actionCrearProducto()
    {
        $model = new tbl_producto();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['listar-productos']);
        }

        return $this->render('crear_productos', [
            'model' => $model,
        ]);
    }
     public function actionEditarProducto($id)
    {
        $model = tbl_producto::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['listar-productos']);
        }

        return $this->render('editar_producto', [
            'model' => $model,
        ]);
    }

    public function actionEliminarProducto($id)
    {
        $model = tbl_producto::findOne($id);
        if ($model !== null) {
            $model->delete();
        }

        return $this->redirect(['listar-productos']);
    }
    
    public function actionListarClientes()
    {
        $clientes = tbl_usuario::find()->all();
        return $this->render('listar_clientes', [
            'clientes' => $clientes,
        ]);
    }

}
