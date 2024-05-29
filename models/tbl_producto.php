<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tbl_producto;

/**
 * tbl_Producto represents the model behind the search form of `app\models\tbl_producto`.
 */
class tbl_Producto extends tbl_producto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_cantidad'], 'integer'],
            [['pro_nombre'], 'safe'],
            [['pro_precio'], 'number'],
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
        $query = tbl_producto::find();

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
            'pro_id' => $this->pro_id,
            'pro_cantidad' => $this->pro_cantidad,
            'pro_precio' => $this->pro_precio,
        ]);

        $query->andFilterWhere(['like', 'pro_nombre', $this->pro_nombre]);

        return $dataProvider;
    }
}
