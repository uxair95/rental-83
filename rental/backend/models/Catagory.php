<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "catagory".
 *
 * @property integer $catagory_id
 * @property string $catagory_name
 *
 * @property Product[] $products
 */
class Catagory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catagory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catagory_name'], 'required'],
            [['catagory_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'catagory_id' => 'Catagory ID',
            'catagory_name' => 'Catagory Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['catagory_catagory_id' => 'catagory_id']);
    }
}
