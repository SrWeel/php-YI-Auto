<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tipo_usuario".
 *
 * @property int $tusu_id
 * @property string $tusu_nombre
 * @property string $tusu_estado
 *
 * @property TblUsuario[] $tblUsuarios
 */
class tbl_tipo_usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_tipo_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tusu_nombre', 'tusu_estado'], 'required'],
            [['tusu_nombre'], 'string', 'max' => 150],
            [['tusu_estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tusu_id' => 'Tusu ID',
            'tusu_nombre' => 'Tusu Nombre',
            'tusu_estado' => 'Tusu Estado',
        ];
    }

    /**
     * Gets query for [[TblUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsuarios()
    {
        return $this->hasMany(TblUsuario::class, ['tusu_id' => 'tusu_id']);
    }
}
