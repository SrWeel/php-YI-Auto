<?php

namespace app\controllers;

use app\models\tbl_usuario;

use app\models\tbl_tipo_usuario;


use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for tbl_usuario model.
 */
class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all tbl_usuario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => tbl_usuario::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'usu_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single tbl_usuario model.
     * @param int $usu_id Usu ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($usu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($usu_id),
        ]);
    }

    /**
     * Creates a new tbl_usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new tbl_usuario();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'usu_id' => $model->usu_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing tbl_usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $usu_id Usu ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($usu_id)
    {
        $model = $this->findModel($usu_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'usu_id' => $model->usu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing tbl_usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $usu_id Usu ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($usu_id)
    {
        $this->findModel($usu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the tbl_usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $usu_id Usu ID
     * @return tbl_usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($usu_id)
    {
        if (($model = tbl_usuario::findOne(['usu_id' => $usu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
