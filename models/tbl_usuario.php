<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tbl_usuario;

/**
 * tbl_Usuario represents the model behind the search form of `app\models\tbl_usuario`.
 */
class tbl_Usuario extends tbl_usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usu_id', 'tusu_id'], 'integer'],
            [['usu_cedula', 'usu_nombre', 'usu_correo', 'usu_contra', 'usu_estado'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = tbl_usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'usu_id' => $this->usu_id,
            'tusu_id' => $this->tusu_id,
        ]);

        $query->andFilterWhere(['like', 'usu_cedula', $this->usu_cedula])
            ->andFilterWhere(['like', 'usu_nombre', $this->usu_nombre])
            ->andFilterWhere(['like', 'usu_correo', $this->usu_correo])
            ->andFilterWhere(['like', 'usu_contra', $this->usu_contra])
            ->andFilterWhere(['like', 'usu_estado', $this->usu_estado]);

        return $dataProvider;
    }
}
