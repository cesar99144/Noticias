<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "postagens".
 *
 * @property int $id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property int|null $idCategoria
 *
 * @property Categorias $idCategoria0
 */
class Postagens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'postagens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCategoria'], 'integer'],
            [['titulo'], 'string', 'max' => 70],
            [['descricao'], 'string', 'max' => 120],
            [['idCategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['idCategoria' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'idCategoria' => 'Id Categoria',
        ];
    }

    /**
     * Gets query for [[IdCategoria0]].
     *
     * @return \yii\db\ActiveQuery|CategoriasQuery
     */
    public function getIdCategoria0()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'idCategoria']);
    }

    /**
     * {@inheritdoc}
     * @return PostagensQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostagensQuery(get_called_class());
    }
}
