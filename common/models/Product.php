<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id ID
 * @property string $name Mahsulot nomi
 * @property int $count Soni
 * @property int $category_id Kategoriya
 * @property int $hit Mashxurligi
 * @property string $description Tarif
 * @property string $keywords Kalit so'z
 * @property string $new Yangi mahsulot
 * @property string $sale Chegirma(skidka)
 * @property string $img Rasmi
 * @property string $content Mahsulot to'liq tarifi
 * @property double $price Narx
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'],'required'],
            [['count', 'category_id'], 'integer'],
            [['description', 'new','hit', 'sale'], 'string'],
            [['price'], 'number'],
            [['name', 'keywords'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {

        return [
            'id' => 'ID',
            'name' => 'Mahsulot nomi',
            'count' => 'Soni',
            'category_id' => 'Kategoriya',
            'hit' => 'Mashxurligi',
            'description' => 'Tarif',
            'keywords' => 'Kalit so\'z',
            'new' => 'Yangi mahsulot',
            'sale' => 'Chegirma(skidka)',
            'img' => 'Rasmi',
            'price' => 'Narx',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getImageLink()
    {
        return Yii::$app->params['image']."storage/images/".$this->img;
    }



}
