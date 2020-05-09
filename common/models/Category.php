<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id ID
 * @property string $name Nomi
 * @property string $keywords Kalit so'z
 * @property string $description Tarif
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'keywords' => 'Kalit so\'z',
            'description' => 'Tarif',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
