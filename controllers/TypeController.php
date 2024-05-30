<?php

namespace app\controllers;

use app\models\tbl_tipo_usuario;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TypeController implements the CRUD actions for tbl_tipo_usuario model.
 */
class TypeController extends Controller
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
     * Lists all tbl_tipo_usuario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => tbl_tipo_usuario::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'tusu_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single tbl_tipo_usuario model.
     * @param int $tusu_id Tusu ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tusu_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tusu_id),
        ]);
    }

    /**
     * Creates a new tbl_tipo_usuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new tbl_tipo_usuario();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tusu_id' => $model->tusu_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing tbl_tipo_usuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tusu_id Tusu ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tusu_id)
    {
        $model = $this->findModel($tusu_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tusu_id' => $model->tusu_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing tbl_tipo_usuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tusu_id Tusu ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tusu_id)
    {
        $this->findModel($tusu_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the tbl_tipo_usuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tusu_id Tusu ID
     * @return tbl_tipo_usuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tusu_id)
    {
        if (($model = tbl_tipo_usuario::findOne(['tusu_id' => $tusu_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
