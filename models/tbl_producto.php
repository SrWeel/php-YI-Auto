<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_producto".
 *
 * @property int $pro_id
 * @property string $pro_nombre
 * @property int $pro_cantidad
 * @property float $pro_precio
 *
 * @property TblProductoUsuario[] $tblProductoUsuarios
 */
class tbl_producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_nombre', 'pro_cantidad', 'pro_precio'], 'required'],
            [['pro_cantidad'], 'integer'],
            [['pro_precio'], 'number'],
            [['pro_nombre'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Pro ID',
            'pro_nombre' => 'Pro Nombre',
            'pro_cantidad' => 'Pro Cantidad',
            'pro_precio' => 'Pro Precio',
        ];
    }

    /**
     * Gets query for [[TblProductoUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblProductoUsuarios()
    {
        return $this->hasMany(TblProductoUsuario::class, ['pro_id' => 'pro_id']);
    }
}
