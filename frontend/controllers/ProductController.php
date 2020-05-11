<?php
namespace frontend\controllers;
use Yii;
use common\models\Product;
use yii\web\Controller;

/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/10/20
 * Time: 8:13 PM
 * To change this template use File | Settings | File Templates.
 */
class ProductController extends Controller
{
    public function actionCategory($id)
    {
        $model = Product::findAll(['category_id'=>$id]);
        return $this->render("index",['model'=>$model]);
    }
}
