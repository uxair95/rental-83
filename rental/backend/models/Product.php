<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property integer $catagory_catagory_id
 * @property string $product_name
 * @property integer $product_cost
 *
 * @property Current[] $currents
 * @property Catagory $catagoryCatagory
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['catagory_catagory_id', 'product_name', 'product_cost'], 'required'],
            [['catagory_catagory_id', 'product_cost'], 'integer'],
            [['product_name'], 'string', 'max' => 255],
            [['catagory_catagory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Catagory::className(), 'targetAttribute' => ['catagory_catagory_id' => 'catagory_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'catagory_catagory_id' => 'Catagory Catagory ID',
            'product_name' => 'Product Name',
            'product_cost' => 'Product Cost(per day)',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrents()
    {
        return $this->hasMany(Current::className(), ['product_product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatagoryCatagory()
    {
        return $this->hasOne(Catagory::className(), ['catagory_id' => 'catagory_catagory_id']);
    }
}
