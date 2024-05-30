<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_usuario".
 *
 * @property int $usu_id
 * @property int $tusu_id
 * @property string $usu_cedula
 * @property string $usu_nombre
 * @property string $usu_correo
 * @property string $usu_contra
 * @property string $usu_estado
 *
 * @property TblTipoUsuario $tusu
 *
 */
class tbl_usuario extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'tbl_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['tusu_id', 'usu_cedula', 'usu_nombre', 'usu_correo', 'usu_contra', 'usu_estado'], 'required'],
            [['tusu_id'], 'integer'],
            [['usu_cedula'], 'string', 'max' => 10],
            [['usu_nombre', 'usu_correo', 'usu_contra'], 'string', 'max' => 150],
            [['usu_estado'], 'string', 'max' => 1],
            [['tusu_id'], 'exist', 'skipOnError' => true, 'targetClass' => tbl_tipo_usuario::class, 'targetAttribute' => ['tusu_id' => 'tusu_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'usu_id' => 'Usu ID',
            'tusu_id' => 'Tusu ID',
            'usu_cedula' => 'Usu Cedula',
            'usu_nombre' => 'Usu Nombre',
            'usu_correo' => 'Usu Correo',
            'usu_contra' => 'Usu Contra',
            'usu_estado' => 'Usu Estado',
        ];
    }

    /**
     * Gets query for [[Tusu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTusu() {
        return $this->hasOne(tbl_tipo_usuario::class, ['tusu_id' => 'tusu_id']);
    }


    
    }
