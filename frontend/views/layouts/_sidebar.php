<?php
/**
 * Created by JetBrains PhpStorm.
 * User: STRIKER
 * Date: 5/9/20
 * Time: 7:26 AM
 * To change this template use File | Settings | File Templates.
 */
use yii\helpers\Url;
use common\models\Category;
use yii\bootstrap4\Nav;

?>
<aside class="shadow">
    <?php
    $model = Category::find()->all();
    $items =null;
    if(!empty($model))
    {
        foreach($model as $mod){
        $items[] = ['label'=>$mod->name,'url'=>'product/category/'.$mod->id];
        }
    echo Nav::widget([
        'items'=>$items,
        'options'=>[
            'class'=>'d-flex flex-column nav-pills'
        ]

    ]);
    }
    ?>
</aside>