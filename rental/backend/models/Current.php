<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "current".
 *
 * @property integer $current_id
 * @property string $customer_name
 * @property integer $product_product_id
 * @property integer $days
 *
 * @property Product $productProduct
 */
class Current extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'current';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'product_product_id', 'days'], 'required'],
            [['product_product_id', 'days'], 'integer'],
            [['customer_name'], 'string', 'max' => 50],
            [['product_product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_product_id' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'current_id' => 'Current ID',
            'customer_name' => 'Customer Name',
            'product_product_id' => 'Product Product ID',
            'days' => 'Days',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_product_id']);
    }
}
