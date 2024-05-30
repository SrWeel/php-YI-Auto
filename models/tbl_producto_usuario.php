<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_producto_usuario".
 *
 * @property int $pusu_id
 * @property int $usu_id
 * @property int $pro_id
 *
 * @property TblProducto $pro
 * @property TblUsuario $tblUsuario
 */
class tbl_producto_usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_producto_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usu_id', 'pro_id'], 'required'],
            [['usu_id', 'pro_id'], 'integer'],
            [['pro_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblProducto::class, 'targetAttribute' => ['pro_id' => 'pro_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pusu_id' => 'Pusu ID',
            'usu_id' => 'Usu ID',
            'pro_id' => 'Pro ID',
        ];
    }

    /**
     * Gets query for [[Pro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPro()
    {
        return $this->hasOne(TblProducto::class, ['pro_id' => 'pro_id']);
    }

    /**
     * Gets query for [[TblUsuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsuario()
    {
        return $this->hasOne(TblUsuario::class, ['usu_id' => 'usu_id']);
    }
}
